<?php
require 'includes/header.php';
require 'db/conn.php';

if(!isset($_SESSION["username"])) {
    header("location: login.php");
}
$email = $_SESSION["email"];

$result = getUserInfo($conn, $email);
if(!$result) {
    echo mysqli_error();
    exit();
}

$result = mysqli_fetch_assoc($result);


$name = $result["name"];

$phone = $result["phone"];
$img_path = $result["img_path"];
$about = $result["about"];
$expertise = $result["expertise"];
$industries = $result["industries"];
$linkedin = $result["linkedin"];
$github = $result["github"];
$tweeter = $result["tweeter"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="icon" type="image/x-icon" href="images/fevicon.jpg">


    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/profile.css">
</head>
<body>
    <?php
        include "includes/navbar.php";
    ?>

    <div class="main-container">
        <div class="container">
            <div class="sub-container">
                <div class="cover-img-div">
                    <img src="images/cover-img.png" class="cover-img" alt="">
                </div>
                <div class="avatar-div">
                    <img src="<?php echo $img_path ?>" class="avatar-img rounded"  alt="user avatar"></div>
                <div class="profile-details">
                    <h2><?php echo $name ?></h2>
                    <p>experts @ <?php echo $expertise ?></p>
                    <p>industries @ <?php echo $industries ?></p>

                </div>

            </div>

            <div class="sub-container">
                <h2>About</h2>
                <p><?php echo $about ?></p>
            </div>

            <div class="sub-container">
                <h2>Networks</h2>
            </div>

            <div class="sub-container">
                <h2>Edit your profile</h2>
                <form action="update_profile.php" class="edit-form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?php echo $name ?>">

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id ="email" value="<?php echo $email ?>" readonly>

                    </div>
                    <div class="form-group">
                        <label for="phone">Phone no</label>
                        <input type="number" name="phone" id ="phone" value="<?php echo $phone ?>">

                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <input type="text" name="about" id ="about" value="<?php echo $about ?>">

                    </div>
                    <div class="form-group">
                        <label for="expertise">expertise</label>
                        <input type="text" name="expertise" id ="expertise" value="<?php echo $expertise ?>">

                    </div>
                    <div class="form-group">
                        <label for="industries">industries</label>
                        <input type="text" name="industries" id ="industries" value="<?php echo $industries ?>">

                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" name="linkedin" id ="linkedin" value="<?php echo $linkedin ?>">
                    </div>
                    <div class="form-group">
                        <label for="github">Github</label>
                        <input type="text" name="github" id ="github" value="<?php echo $github ?>">
                    </div>
                    <div class="form-group">
                        <label for="tweeter">Tweeter</label>
                        <input type="text" name="tweeter" id ="tweeter" value="<?php echo $tweeter ?>">
                    </div>

                    <div class="form-group">
                        <label for="pfp">Profile Photo</label>
                        <input type="file" name="pfp" id ="pfp">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" id="submit-btn" value="Update">
                    </div>

                </form>
            </div>

        </div>
    </div>
