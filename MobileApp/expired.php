<?php
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<?php include_once "header.php"; ?>
<body>
<div class="container">
    <h5> Događaji koje ste propustili...</h5>
    <?php
    $sql = "SELECT * FROM events WHERE date_time < NOW()";
    $query = mysqli_query($conn, $sql) or die($conn);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach ($results as $result) {?>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-12 col-md-12 col-xl-12">
                    <div class="card-title text-center mt-2">
                        <h5 class="text-danger"><?= $result['title'] ?></h5>
                    </div>
                    <div class="card-body text-center">
                        <p class=" text-warning"><?= $result['description'] ?></p>
                        <i class=" text-info"><?= $result['address'] ?> </i> <br>
                        <i class=" text-info"><?= date("d/m/Y H:i", strtotime($result['date_time'])) ?></i>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</body>