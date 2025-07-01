
<?php
include '../../_config.php';
session_start();
if(isset($_COOKIE['userID'])){
    $user_id = $_COOKIE['userID'];
  };
 $url = $_POST['btnValue'];
 if(isset($_POST['btnValue']))
 {
     // Getting the value of button
     // in $btnValue variable
     $btnValue = $_POST['btnValue'];
 
     $anime_id = $url;
     mysqli_query($conn,"DELETE FROM `watch_later` WHERE (user_id,anime_id) = ('$user_id', '$anime_id')"); 
     
     echo " &nbsp;<i class='fas fa-minus mr-2'></i>&nbsp;Remove from List&nbsp;";
 }
?>
