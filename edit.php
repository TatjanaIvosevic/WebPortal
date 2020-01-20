<?php
include_once 'db_config.php';

	if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        $sql = "SELECT * FROM field WHERE id=$id";
        $query = mysqli_query($conn, $sql);

        if (count($query) == 1 ) {
            $n = mysqli_fetch_array($query);
            $status = $n['status'];
            $latitude = $n['latitude'];
            $longitude = $n['longitude'];
        }
    }
	?>
<body>

    <!-- newly added field -->
    <input type="hidden" name="id" value="<?php echo '$id;' ?>">

    <!-- modified form fields -->
    <input type="text" name="name" value="<?php echo '$status;' ?>">
    <input type="text" name="address" value="<?php echo '$latitude;' ?>">
    <input type="text" name="address" value="<?php echo '$longitude;' ?>">

    <?php if ($update == true): ?>
        <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    <?php else: ?>
        <button class="btn" type="submit" name="save" >Save</button>
    <?php endif ?>

    <?php
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $sq1 = "UPDATE field SET status='$status', latitude='$latitude', longitude='$longitude' WHERE id=$id";
        $query1 = mysqli_query($conn,$sql1);

        $_SESSION['message'] = "Status postavljen na 1, adresa ažurirana";
        header('Location: adminpanel.php');
        }
    ?>
</body>
