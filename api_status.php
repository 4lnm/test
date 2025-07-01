<?php
require('./_config.php');
require('./gogo_integration.php');

header('Content-Type: application/json');

$gogo = new GogoAnimeIntegration($api);

// Test with a popular anime episode
$test_episodes = [
    'naruto-episode-1',
    'one-piece-episode-1',
    'attack-on-titan-episode-1'
];

$results = [];
$overall_status = 'working';

foreach ($test_episodes as $episode) {
    $episode_data = $gogo->getEpisodeData($episode);
    $video_sources = $gogo->getVideoSources($episode);
    
    $status = [
        'episode_id' => $episode,
        'episode_data_available' => !empty($episode_data),
        'video_sources_available' => !empty($video_sources),
        'video_sources_count' => count($video_sources),
        'api_used' => $gogo->getCurrentApi()
    ];
    
    if (!$episode_data || empty($video_sources)) {
        $overall_status = 'partial';
    }
    
    $results[] = $status;
}

// Check if any episode worked
$working_count = 0;
foreach ($results as $result) {
    if ($result['episode_data_available'] && $result['video_sources_available']) {
        $working_count++;
    }
}

if ($working_count === 0) {
    $overall_status = 'down';
} elseif ($working_count < count($test_episodes)) {
    $overall_status = 'partial';
}

$response = [
    'status' => $overall_status,
    'timestamp' => date('Y-m-d H:i:s'),
    'primary_api' => $api,
    'working_episodes' => $working_count,
    'total_tested' => count($test_episodes),
    'details' => $results
];

echo json_encode($response, JSON_PRETTY_PRINT);
?>
