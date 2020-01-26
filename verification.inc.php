<?php

require_once 'db_config.php';

$code = mysqli_real_escape_string($conn, trim($_GET['code']));
$sql = "SELECT * FROM user WHERE verification_code = '$code'";
$query = mysqli_query($conn,$sql);
$user = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0) {
    $sql = "UPDATE user SET verified = 1 WHERE id = {$user['id']}";
    $query = mysqli_query($conn,$sql);
    header('Location: registration.php');
    exit;
} else {
    header('Location: registration.php');
    exit;
}