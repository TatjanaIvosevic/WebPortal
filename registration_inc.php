<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn,trim($_POST['username']));
    $pass = mysqli_real_escape_string($conn,trim($_POST['password']));
    $repeat_pass = mysqli_real_escape_string($conn,trim($_POST['repeat_pass']));

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header('Location: register.php?error=usernameExists');
        exit;
    }

    if(empty($username) || empty($pass) || empty($repeat_pass)){
        header('Location: register.php?error=empty');
        exit;
    }

    if (!preg_match('/^[A-Za-z0-9]{2,20}$/', $username)) {
        header('Location: register.php?error=usernameIncorrect');
        exit;
    }

    if($pass != $repeat_pass){
        header('Location: register.php?password');
        exit;
    }

    if (strlen($pass) < 5 || strlen($pass) > 20){
        header('Location: register.php?passlen');
        exit;
    }

    $hashed_pass = password_hash($pass,PASSWORD_DEFAULT);

    $sql = "INSERT INTO user(username, password) VALUES('$username','$hashed_pass')";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('Location: login.php');
        exit;
    }
    header('Location: register.php');
    exit;
}