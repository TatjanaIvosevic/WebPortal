<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "basketportal";

/* CONNECTING TO DATABASE */
$conn = mysqli_connect($host,$user,$pass,$database);
if(!$conn){
    die('Failed to connect to database!');
}

/* ERRORS */
mysqli_query($conn, "SET NAMES utf8") or die(mysqli_error($conn));
mysqli_query($conn, "SET CHARACTER SET utf8")or die(mysqli_query($conn));
mysqli_query($conn, "SET COLLATION_CONNECTION='utf8_general_ci'")or die(mysqli_query($conn));