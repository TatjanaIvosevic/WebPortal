<?php
session_start();
if(isset($_SESSION['id'])) {
    require_once 'db_config.php';
    $field_id = mysqli_real_escape_string($conn,$_POST['id']);
    $rating = (double)mysqli_real_escape_string($conn,$_POST['rating']);
    $user_id = $_SESSION['id'];
    //Check if user rated field
    $sql = "SELECT id FROM rating WHERE user_id=$user_id AND field_id=$field_id";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)) {
        echo $field_id.',1';
        exit;
    }
    //Insert new rating in table rating
    $sql = "INSERT INTO rating(user_id,field_id) VALUES($user_id,$field_id)";
    $query = mysqli_query($conn,$sql);
    if(!$query) {
        echo $field_id.',2';
        exit;
    }

    //Update existing rating
    $sql = "SELECT people_liked,rating_total FROM field WHERE id=$field_id";
    $query = mysqli_query($conn,$sql);
    if(!mysqli_num_rows($query)) {
        echo $field_id.',2';
        exit;
    }
    $ratingSql = mysqli_fetch_assoc($query);
    $totalRating = $ratingSql['rating_total'] + $rating;
    $peopleLiked = $ratingSql['people_liked'] + 1;
    $newRating = $totalRating / $peopleLiked;
    $sql = "UPDATE field SET rating=$newRating,rating_total=$totalRating,people_liked=$peopleLiked WHERE id=$field_id";
    $query = mysqli_query($conn,$sql);
    if(!$query) {
        echo $field_id.',2';
        die;
    }
    echo $field_id.',3';
}
