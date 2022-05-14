<?php
    require "includes/header.php";
    require "db/conn.php";

    if(isset($_POST["submit"]) && isset($_POST["name"])) {
        $name = $_POST["name"];
        $url = $_POST["url"];
        $tagline = $_POST["tagline"];
        $membership = $_POST["membership"];
        $visibility = $_POST["visibility"];
        $catagory = $_POST["categorise"];

        $ret = createCommunity($conn, $name, $url, $tagline, $membership, $visibility, $category);

        if($ret) {
            header("location: home.php");
        }
        else {
            header("location: ccform.html");
        }
    }
    else {
        header("location: ccform.html");
    }

?>