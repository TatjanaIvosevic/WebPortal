<?php
include 'db_config.php';

$id=$_GET["id"];
mysqli_query($conn,"delete from field where id=$id");
exit;

?>
