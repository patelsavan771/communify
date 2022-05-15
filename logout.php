<?php
    require "includes/header.php";

    unset($_SESSION["username"]);
    unset($_SESSION["email"]);
    header("location: index.php");

?>