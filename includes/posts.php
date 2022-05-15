<?php  

// require 'header.php';
// require '../db/conn.php';

if(!isset($_SESSION["username"]) || !isset($_SESSION['email'])) {
    header("location: login.php");
}

$posts = getAllPosts($conn);

while($post = mysqli_fetch_assoc($posts)) {
    $author = $post['author'];
    $author_email = $post['email'];
    $date = $post['date'];
    $body = $post['body'];

    include 'post_template.php';

}


?>