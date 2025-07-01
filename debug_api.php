<?php
require('./_config.php');

// Test episode ID - you can change this to test different episodes
$test_episode = isset($_GET['episode']) ? $_GET['episode'] : 'naruto-episode-1';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GogoAnime API Debug</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .status { padding: 10px; border-radius: 4px; margin: 10px 0; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        pre { background: #f8f9fa; padding: 15px; border-radius: 4px; overflow: auto; max-height: 300px; border: 1px solid #e9ecef; }
        .nav { margin-bottom: 20px; }
        .nav a { margin-right: 15px; color: #007bff; text-decoration: none; }
        .nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h2>GogoAnime API Debug</h2>
        <div class="nav">
            <a href="api_status.php">Check API Status (JSON)</a>
            <a href="debug_api.php?episode=naruto-episode-1">Test Naruto</a>
            <a href="debug_api.php?episode=one-piece-episode-1">Test One Piece</a>
            <a href="debug_api.php?episode=attack-on-titan-episode-1">Test Attack on Titan</a>
        </div>

        <p>Testing episode: <strong><?= htmlspecialchars($test_episode) ?></strong></p>
        <p>API URL: <strong><?= htmlspecialchars($api) ?></strong></p>

        <?php if (empty($api)): ?>
            <div class="status error">
                <strong>ERROR:</strong> API URL is not configured in _config.php
            </div>
        <?php endif;

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
