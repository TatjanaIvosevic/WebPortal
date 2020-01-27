<?php
include 'db.php';


$id = mysqli_real_escape_string($conn,$_POST["id"]);
mysqli_query($conn,"delete from favorites where id=$id");
header('Location:index.php');
exit;

?>
