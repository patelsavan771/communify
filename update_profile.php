<?php

require 'includes/header.php';
require 'db/conn.php';

if(!isset($_SESSION["username"]) && !isset($_SESSION["email"])) {
    header("location: login.php");
}

if(isset($_POST["submit"]) && $_SESSION["email"]) {
    $email = $_SESSION["email"];
    $name = $_POST["name"];

    $phone = $_POST["phone"];
    // $img_path = $_POST["img_path"];
    $about = $_POST["about"];
    $expertise = $_POST["expertise"];
    $industries = $_POST["industries"];

    $linkedin = $_POST["linkedin"];
    $github = $_POST["github"];
    $tweeter = $_POST["tweeter"];

    $isUpdated = updateUserInfo($conn, $email, $name, $phone, $about, $expertise, $industries, $linkedin, $github, $tweeter);

    if(isset($_FILES['pfp'])) {
        echo "
            <script>
                alert('updating your profile picture.');
            </script>
        ";
        
        $file = $_FILES['pfp'];
        $isUploaded = updateUserProfile($conn, $email, $file);
        if($isUploaded) {
            echo "
                <script>
                    alert('Profile picture uploaded successfully.');
                </script>
            ";
        }

    }
    if($isUpdated) {
        echo "
            <script>
                window.location.href='profile.php';
                alert('Information updated successfully.');
            </script>
        ";
        // header("location: profile.php");
    }
    else {
        echo "error in updation->".mysqli_error();

    }
}




?>