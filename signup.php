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
                <h2>Welcome to communify</h2>
                <p>Sign up, enter your details</p>

                <form action="signup.php">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>

                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="********">

                    <input type="submit" value="Sign up">
                </form>

                <p>Already have an account? <a href="login.php" class="link">Login</a></p>
            </div>

            <?php
                include 'includes/card_logo.php';
            ?>
        </div>
    </div>

</body>

</html>