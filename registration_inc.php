<?php
require_once 'db_config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn,trim($_POST['username']));
    $email = mysqli_real_escape_string($conn,trim($_POST['email']));
    $pass = mysqli_real_escape_string($conn,trim($_POST['password']));
    $repeat_pass = mysqli_real_escape_string($conn,trim($_POST['repeat_password']));

    $sql = "SELECT * FROM user WHERE username = '$username' AND email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header('Location: registration.php?error=usernameExists');
        exit;
    }

    if(empty($username) || empty($email) || empty($pass) || empty($repeat_pass)){
        header('Location: registration.php?error=empty');
        exit;
    }

    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/', $email)) {
        header('Location: registration.php?error=emailIncorrect');
        exit;
    }

    if (!preg_match('/^[A-Za-z0-9]{2,20}$/', $username)) {
        header('Location: registration.php?error=usernameIncorrect');
        exit;
    }

    if($pass != $repeat_pass){
        header('Location: registration.php?error=password');
        exit;
    }

    if (strlen($pass) < 5 || strlen($pass) > 20){
        header('Location: registration.php?error=passlen');
        exit;
    }


    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $hashed_pass = password_hash($pass,PASSWORD_DEFAULT);
    $code = generateRandomString(10);

    $sql = "INSERT INTO user(username, email, password, verification_code) VALUES('$username', '$email', '$hashed_pass','$code')";
    $result = mysqli_query($conn,$sql);

    if($result){
        $header = "";
        $header.="From: ROOT x<root@vts.su.ac.rs>\n";
        $header.="X-Mailer: PHP\n";
        $header.="X-Priority: 1\n";
        $header.="Content-Type: text/html; charset=UTF-8\n";
        $message = "Click the link to verify your account <a href='http://jervolimobasket.tatjana.tech/verification.inc.php?code=$code'>click</a>";
        $send = mail($email,'Account verification',$message,$header);
        if($send) {
            header('Location: registration.php?message=emailVerification');
            exit;
        }
        header('Location: registration.php?error=verification');
        exit;

    }
    header('Location: registration.php');
    exit;
}