<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>

    <div class="container-login">
        <div id="login-box">
            <div class="left">
                <h2>Welcome back</h2>
                <p>Welcome bake enter your details</p>

                <form action="login.php">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="********">

                    <input type="submit" value="Sign in">
                </form>

                <p>Don't have an accout? <a href="signup.php" class="link">Sign Up</a></p>
            </div>

            <?php
            include 'includes/card_logo.php';
            ?>
        </div>
    </div>

</body>

</html>