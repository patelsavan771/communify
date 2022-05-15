<?php
require 'includes/header.php';
require 'db/conn.php';

if(!isset($_SESSION["username"]) && !isset($_SESSION["email"])) {
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

    <link rel="icon" type="image/x-icon" href="images/fevicon.jpg">


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
                    <img src="<?php echo getUserProfileUrl($conn, $_SESSION["email"]) ?>" class="profile-img rounded" alt="user profile">
                </div>
                <div class="sub-profile-div">
                    <?php echo $_SESSION["username"] ?>
                </div>
                <div class="sub-profile-div">
                    <a href="profile.php" class="link-btn small-btn">profile</a>
                </div>
            </div>
        </div>

        <div id="feed" class="border">
            <div class="post" id="create-post-div">
                <h3>Create a Post</h3>
                <form action="post.php" class="post">
                    <textarea name="create-post-textarea" id="create-post-textarea" cols="30" rows="10"></textarea>
                    <div class="right-aligned">
                        <input type="submit" class="link-btn small-btn" id="post-btn" value="Post">
                    </div>
                </form>
            </div>

            <div class="post">
                <div class="post-header">
                    <div class="post-header-img-div">
                        <img src="images/savan.jpg" alt="post author pfp" class="post-header-img rounded">
                    </div>
                    <div class="header-info">
                        <span style="margin-top: 4px;">Name</span><br>
                        <div class="datetime"><small>date and time</small></div><br>
                    </div>
                </div>

                <div class="post-body">
                    <p>Hello guys welcome to our community. this is dumy post.</p>
                </div>
                <button class="link-btn small-btn">like</button>
            </div>
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