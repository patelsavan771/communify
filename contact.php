<?php
require 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communify</title>

    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>

    <?php
    include 'includes/navbar.php';
    ?>


    <!-- ------ -->

    <div class="container-login">
        <div id="login-box">
            <div class="left">
                <h2>COMMUNIFY</h2>
                <p>Drop us note</p>

                <form action="signup.php">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="phone">phone (optional):</label>
                    <input type="phone" name="phone" id="phone" placeholder="phone no">

                    <label for="msg">Your message:</label><br>
                    <textarea name="msg" id="msg" rows="5">message here..
                    </textarea>

                    <input type="submit" value="Send Message">
                </form>
            </div>

            <?php
                include 'includes/card_logo.php';
            ?>
        </div>
    </div>

    <!-- ------ -->
    <?php
    include 'includes/footer.php';
    ?>

</body>

</html>