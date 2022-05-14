<?php
    require "includes/header.php";

    unset($_SESSION["username"]);
    header("location: home.php");

?>