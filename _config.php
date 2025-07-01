<?php

$conn = mysqli_connect("localhost", "root", "", "siena") or die("Connection failed");



$websiteTitle = "AnimeZia"; // Website Name
$websiteUrl = "https://{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = "https://cdnzia.pages.dev/images/logo.webp"; // Logo
$contactEmail = ""; // Contact Email

$version = "4.1";

//Donate
$donate = "http://coindrop.to/animezia1";

// Socials
$telegram = "https://t.me/Animezia_net"; // telegram
$discord = ""; // Discord
$reddit = ""; // Reddit
$twitter = ""; // Twitter



$disqus = "https://animezia-net.disqus.com"; // Disqus


// API URL
$api = "https://gogo-api-topaz.vercel.app"; //https://github.com/shashankktiwariii/anikatsu-api


$banner = "https://cdnzia.pages.dev/images/banner.webp";  //Banner
?>
