<?php
require('./_config.php');

// Test episode ID - you can change this to test different episodes
$test_episode = isset($_GET['episode']) ? $_GET['episode'] : 'naruto-episode-1';

echo "<h2>GogoAnime API Debug</h2>";
echo "<p>Testing episode: <strong>$test_episode</strong></p>";
echo "<p>API URL: <strong>$api</strong></p>";

// Test 1: Episode details
echo "<h3>1. Testing Episode Details API</h3>";
$episode_url = "$api/getEpisode/$test_episode";
echo "<p>URL: $episode_url</p>";

$episode_json = @file_get_contents($episode_url);
if ($episode_json) {
    $episode_data = json_decode($episode_json, true);
    echo "<pre style='background:#f0f0f0; padding:10px; overflow:auto; max-height:300px;'>";
    echo htmlspecialchars(json_encode($episode_data, JSON_PRETTY_PRINT));
    echo "</pre>";
} else {
    echo "<p style='color:red;'>Failed to fetch episode data</p>";
}

// Test 2: Video sources
echo "<h3>2. Testing Video Sources API</h3>";
$video_url = "$api/vidcdn/watch/$test_episode";
echo "<p>URL: $video_url</p>";

$video_json = @file_get_contents($video_url);
if ($video_json) {
    $video_data = json_decode($video_json, true);
    echo "<pre style='background:#f0f0f0; padding:10px; overflow:auto; max-height:300px;'>";
    echo htmlspecialchars(json_encode($video_data, JSON_PRETTY_PRINT));
    echo "</pre>";
    
    if (isset($video_data['sources']) && !empty($video_data['sources'])) {
        echo "<h4>Available Video Sources:</h4>";
        foreach ($video_data['sources'] as $i => $source) {
            echo "<p>Source $i: " . $source['file'] . "</p>";
        }
    }
} else {
    echo "<p style='color:red;'>Failed to fetch video sources</p>";
}

// Test 3: Anime details
if (isset($episode_data['anime_info'])) {
    $anime_id = $episode_data['anime_info'];
    echo "<h3>3. Testing Anime Details API</h3>";
    $anime_url = "$api/anime-details/$anime_id";
    echo "<p>URL: $anime_url</p>";
    
    $anime_json = @file_get_contents($anime_url);
    if ($anime_json) {
        $anime_data = json_decode($anime_json, true);
        echo "<pre style='background:#f0f0f0; padding:10px; overflow:auto; max-height:200px;'>";
        echo htmlspecialchars(json_encode($anime_data, JSON_PRETTY_PRINT));
        echo "</pre>";
    } else {
        echo "<p style='color:red;'>Failed to fetch anime details</p>";
    }
}

echo "<hr>";
echo "<p><strong>Instructions:</strong></p>";
echo "<ul>";
echo "<li>If you see JSON data above, the GogoAnime API is working</li>";
echo "<li>Check that video sources contain .m3u8 or .mp4 URLs</li>";
echo "<li>Test different episodes by adding ?episode=EPISODE_ID to this URL</li>";
echo "<li>Delete this file when done testing for security</li>";
echo "</ul>";

echo "<p><a href='debug_api.php?episode=one-piece-episode-1'>Test One Piece Episode 1</a> | ";
echo "<a href='debug_api.php?episode=naruto-episode-1'>Test Naruto Episode 1</a> | ";
echo "<a href='debug_api.php?episode=attack-on-titan-episode-1'>Test Attack on Titan Episode 1</a></p>";
?>
