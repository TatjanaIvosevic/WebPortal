<?php
session_start();
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $pass= mysqli_real_escape_string($conn,trim($_POST['password']));

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 0){
        echo 'Korisničko ime je neispravno';
        header('Location: login.php?error=username');
        exit;
    }

    $user = mysqli_fetch_assoc($result);

    if(!password_verify($pass,$user['password'])) {
        echo 'Lozinka je neispravna';
        header('Location: login.php?error=password');
        exit;
    }

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header('Location: events.php');
    exit;
}
