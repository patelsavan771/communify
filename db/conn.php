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

        $q = "INSERT INTO users_info(name, email) VALUES ('$name','$email')";
        $result1 = mysqli_query($conn, $q);

        if (!$result || !$result1) {
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
        $_SESSION["email"] = $email;
        return true;
    }
    else {
        return false;
    }
}


function getUserInfo($conn, $email) {
    $q = "select * from users_info where email = '$email'";
    $result = mysqli_query($conn, $q);

    return $result;
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


function updateUserInfo($conn, $email, $name, $phone, $about, $expertise, $industries, $linkedin, $github, $tweeter) {
    $q = "UPDATE users_info SET name='$name',phone='$phone',about='$about',expertise='$expertise',industries='$industries', linkedin='$linkedin', github='$github', tweeter='$tweeter' WHERE email = '$email'";

    $result = mysqli_query($conn, $q);
    if($result) {
        return true;
    }
    else {
        return false;
    }
}


function updateUserProfile($conn, $email, $file) {

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = Array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 1 * 1024* 1024) {
                $fileNameNew = uniqid('', true).".". $fileActualExt;
                $fileDest = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDest);

                $q = "UPDATE users_info SET img_path = '$fileDest' where email = '$email'";
                $result = mysqli_query($conn, $q);
                if($result) {
                    return true;
                }
                else {
                    echo "sql error ->".mysqli_error();
                }
            }
        }
    }
    return false;
}


?>
