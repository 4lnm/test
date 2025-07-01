<?php
/**
 * GogoAnime Integration Helper Functions
 * This file contains functions to fetch anime data from GogoAnime API
 */

class GogoAnimeIntegration {
    private $api_urls = [
        'https://gogo-api-topaz.vercel.app',
        'https://gogoanime-api-sigma.vercel.app',
        'https://api.consumet.org/anime/gogoanime'
    ];
    
    private $current_api = null;
    
    public function __construct($preferred_api = null) {
        if ($preferred_api) {
            $this->current_api = $preferred_api;
        } else {
            $this->current_api = $this->api_urls[0];
        }
    }
    
    /**
     * Fetch episode data with fallback APIs
     */
    public function getEpisodeData($episode_id) {
        foreach ($this->api_urls as $api_url) {
            $url = "$api_url/getEpisode/$episode_id";
            $data = $this->fetchData($url);
            if ($data) {
                $this->current_api = $api_url;
                return $data;
            }
        }
        return null;
    }
    
    /**
     * Fetch video sources with fallback APIs
     */
    public function getVideoSources($episode_id) {
        foreach ($this->api_urls as $api_url) {
            $url = "$api_url/vidcdn/watch/$episode_id";
            $data = $this->fetchData($url);
            if ($data && isset($data['sources'])) {
                $this->current_api = $api_url;
                return $data['sources'];
            }
        }
        return [];
    }
    
    /**
     * Fetch anime details with fallback APIs
     */
    public function getAnimeDetails($anime_id) {
        $endpoints = ['anime-details', 'info'];
        
        foreach ($this->api_urls as $api_url) {
            foreach ($endpoints as $endpoint) {
                $url = "$api_url/$endpoint/$anime_id";
                $data = $this->fetchData($url);
                if ($data) {
                    $this->current_api = $api_url;
                    return $data;
                }
            }
        }
        return null;
    }
    
    /**
     * Get best quality video URL
     */
    public function getBestVideoUrl($episode_id, $preferred_quality = 'auto') {
        $sources = $this->getVideoSources($episode_id);
        
        if (empty($sources)) {
            return null;
        }
        
        // Sort by quality (highest first)
        usort($sources, function($a, $b) {
            $qualityOrder = ['1080p' => 4, '720p' => 3, '480p' => 2, '360p' => 1];
            $aQuality = isset($qualityOrder[$a['quality'] ?? '']) ? $qualityOrder[$a['quality']] : 0;
            $bQuality = isset($qualityOrder[$b['quality'] ?? '']) ? $qualityOrder[$b['quality']] : 0;
            return $bQuality - $aQuality;
        });
        
        // Find preferred quality or return best available
        if ($preferred_quality !== 'auto') {
            foreach ($sources as $source) {
                if (isset($source['quality']) && $source['quality'] === $preferred_quality) {
                    return $this->proxyUrl($source['file']);
                }
            }
        }
        
        // Return best quality available
        return $this->proxyUrl($sources[0]['file']);
    }
    
    /**
     * Proxy URL through CORS proxy if needed
     */
    private function proxyUrl($url) {
        if (strpos($url, '.m3u8') !== false) {
            return 'https://goodproxy.eren-yeager-founding-titan-9.workers.dev/fetch?url=' . urlencode($url);
        }
        return $url;
    }
    
    /**
     * Fetch data from URL with error handling
     */
    private function fetchData($url) {
        $context = stream_context_create([
            'http' => [
                'timeout' => 10,
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36'
            ]
        ]);
        
        $json = @file_get_contents($url, false, $context);
        if ($json) {
            $data = json_decode($json, true);
            return $data;
        }
        return null;
    }
    
    /**
     * Get current working API URL
     */
    public function getCurrentApi() {
        return $this->current_api;
    }
}
?>
