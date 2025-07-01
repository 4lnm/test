<?php
session_start();
if(isset($_COOKIE['userID'])){
    $user_id = $_COOKIE['userID'];
  };
include '../../_config.php';
 $url = $_POST['btnValue'];
 $getAnime = file_get_contents("https://goganime.herokuapp.com/getAnime/$url");
 $getAnime = json_decode($getAnime, true);
 if(isset($_POST['btnValue']))
 {
     // Getting the value of button
     // in $btnValue variable
     $btnValue = $_POST['btnValue'];
 
     $anime_id = $url;
     $name = $getAnime['name'];
     $type = $getAnime['type'];
     $image = $getAnime['imageUrl'];
     $release = $getAnime['released'];
     mysqli_query($conn,"INSERT INTO `watch_later` (user_id,name,anime_id,image,type,released) VALUES('$user_id','$name','$anime_id','$image', '$type', '$release')"); 
     
     echo " &nbsp;<i class='fas fa-minus mr-2'></i>&nbsp;Remove from List&nbsp;";
 }
?>