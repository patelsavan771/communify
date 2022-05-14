<?php
$host = "localhost";
$user_db = "root";
$password_db = "";
$db_name = "communify";

$conn = mysqli_connect($host, $user_db, $password_db, $db_name);

function registerUser($conn, $name, $email, $password)
{
    //check if the user is already resistered, from the same email.
    $q = "select count(*) as num from auth where email = '$email'";
    $result = mysqli_query($conn, $q);
    $result = mysqli_fetch_assoc($result);
    if($result["num"] == 0) {
        $new_password = md5($password);
        $q = "INSERT INTO auth(name, email, password) VALUES ('$name','$email','$new_password')";
        $result = mysqli_query($conn, $q);

        if (!$result) {
            $_SESSION["error"] = "Something went wrong! try again";
            return false;
        } else {
            $_SESSION["username"] = $result["name"];
            return true;
        }
    }
    else {
        $_SESSION["error"] = "already registered email. please login.";
        return false;
    }
    
}

function isValidUser($conn, $email, $password) {
    $new_password = md5($password);
    $q = "select count(*) as num, name from auth where email = '$email' and password = '$new_password'";

    $result =mysqli_query($conn, $q);
    $result = mysqli_fetch_assoc($result);
    if($result["num"] == 1) {
        $_SESSION["username"] = $result["name"];
        return true;
    }
    else {
        return false;
    }
}


function createCommunity($conn, $name, $url, $tagline, $membership, $visibility, $category) {
    // $url = 
    $q = "INSERT INTO communities(name, url, tagline, membership, visibility, category) VALUES ('$name','$url','$tagline','$membership','$visibility','$category')";

    $result = mysqli_query($conn, $q);
    if($result) {
        return true;
    }
    else {
        return false;
    }
}

?>
