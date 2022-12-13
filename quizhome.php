<?php
require 'includes/header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Home</title>
    <link rel="stylesheet" href="styles/index.css">
</head>

<body>
    <?php
    include 'includes/navbar.php';
    echo $_SESSION["username"];
    ?>





    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>