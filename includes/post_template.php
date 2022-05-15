<?php  
// $author
// $date
// $body
// require 'header.php';
// require '../db/conn.php';

if(!isset($_SESSION["username"]) || !isset($_SESSION['email'])) {
    header("location: login.php");
}

$email = $author_email;

$result = getUserInfo($conn, $email);
if(!$result) {
    echo mysqli_error();
    exit();
}

$result = mysqli_fetch_assoc($result);
$img_path = $result["img_path"];

?>
    <div class="post">
        <div class="post-header">
            <div class="post-header-img-div">
                <img src="<?php echo $img_path ?>" alt="post author pfp" class="post-header-img rounded">
            </div>
            <div class="header-info">
                <span style="margin-top: 4px;"><?php echo $author ?></span><br>
                <div class="datetime"><small><?php echo $date ?></small></div><br>
            </div>
        </div>

        <div class="post-body">
            <p><?php echo $body ?></p>
        </div>
        <button class="link-btn small-btn">like</button>
    </div>