<?php
   include_once 'db_config.php';

   if(isset($_GET['id'])) {
       // header('Location:adminpanel.php');
       // exit;


       $id = (int)mysqli_real_escape_string($conn, $_GET['id']);

       $sql = "SELECT * FROM field WHERE id = $id";
       $query = mysqli_query($conn, $sql);
       $result = mysqli_fetch_assoc($query);

       if (!$result) {
           echo 'Nema rezultata';
           exit;
       }
   }
?>

<!DOCTYPE html>

<html>

<head>

    <title>UPDATE DATA</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<form action="edit.php" method="POST">

    <input type="hidden" name="id" value="<?= $result['id'] ?>" required><br><br>

    Status:<input type="text" name="status" value="<?= $result['status'] ?>" required><br><br>

    Latitude:<input type="text" name="latitude" value="<?= $result['latitude'] ?>" required><br><br>

    Longitude:<input type="text" name="longitude" value="<?= $result['longitude'] ?>" required><br><br>

    <input type="submit" name="edit" value="Update Data">

</form>
<?php
if(isset($_POST['edit'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);

    $sql = "UPDATE field SET status = $status, latitude = $latitude, longitude = $longitude WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo 'Polja izmenjena';
        header('Location: adminpanel.php');
        exit;
    } else {
        echo 'Polja nisu izmenjena';
    }
}
?>

</body>


</html>
