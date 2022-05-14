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
    <link rel="icon" type="image/x-icon" href="images/fevicon.jpg">


    <link rel="stylesheet" href="styles/index.css">
</head>

<body>

    <?php
    include 'includes/navbar.php';
    ?>

    <section id="our-goal">
        <h2>We help create amazing</h2>
        <h2>learning communities</h2>

        <p style="line-height: normal;">69% of people would prefer to join a community to <br>
            learn, rather than learn by themselves</p>

    </section>

    <section id="team-info">
        <h2>The Team</h2>
        <div class="member-cards">
            <div class="member-card">
                <img src="images/savan.jpg" alt="team member photo" class="rounded-img"><br>
                <a href="https://www.linkedin.com/in/patelsavan771/" target="_blank">
                    <h4>Savan Patel</h4>
                </a>
                <span>Developer</span>
                <p>
                    3rd year computer engineering student, who know how to code and passionate to code.
                </p>
            </div>
        </div>

    </section>

    <?php
        include 'includes/footer.php';
    ?>

</body>

</html>