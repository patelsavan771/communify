<?php
require 'includes/header.php';
require 'db/conn.php';

if(!isset($_SESSION["username"])) {
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <?php
        include "includes/navbar.php";
    ?>

    <div id="main-container" class="border">

        <div id="left-profile" class="border">
            <div class="profile-card border">
                <div class="sub-profile-div">                
                    <img src="images/savan.jpg" class="profile-img rounded" alt="user profile">
                </div>
                <div class="sub-profile-div">
                    <?php echo $_SESSION["username"] ?>
                </div>
                <div class="sub-profile-div">
                    <a href="#" class="link-btn small-btn">update</a>
                </div>
            </div>
        </div>

        <div id="feed" class="border">
            feed here...
        </div>

        <div id="right" class="border">
            <div class="group-title">
                GROUPS
                <a href="#" class="link-btn add-group"> &nbsp; + &nbsp;</a>
            </div>
            <div class="group-list">

            </div>
        </div>

    </div>


</body>
</html>