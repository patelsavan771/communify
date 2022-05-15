<?php

require 'includes/header.php';
require 'db/conn.php';

if(!isset($_SESSION["username"]) && !isset($_SESSION["email"]) || !isset($_POST['new_post'])){
    header("location: login.php");
}

if(isset($_POST['new_post'])) {
    $post_body = $_POST['new_post'];
    // echo "Post body".$post_body;
    $author = $_SESSION['username'];
    // echo "<br>post author".$_SESSION["username"];
    $email = $_SESSION["email"];

    $date = date("d/m/Y");
    $time =  date("H:i a");

    if(function_exists('date_default_timezone_set')){
        date_default_timezone_set("Asia/Kolkata");
    }
    echo "<br>";
    $date =  $date." ,".$time;

    $isPosted = creatNewPost($conn, $author, $email, $date, $post_body);
    if($isPosted) {
        header("location: home.php");
    }
    else {
        echo "opps";
    }

}


?>