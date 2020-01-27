<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once 'db.php';

    $event_id = mysqli_real_escape_string($conn, $_POST['id']);
    $user_id = $_SESSION['id'];

    $sql = "SELECT id FROM favorites WHERE user_id=$user_id AND event_id=$event_id";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)) {
        header('Location: index.php');
        exit;
    }

    $sql = "INSERT INTO favorites(event_id, user_id) VALUES ($event_id, $user_id)";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location:index.php#favorites');
        exit;
    } else {
        echo "Došlo je do problema.";
    }

}