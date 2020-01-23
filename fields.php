<?php
session_start();
include_once "includes/header.php";
require_once "db_config.php"; ?>
<body>
<?php include_once "includes/navbar.php"; ?>
<div class="container">
    <div class="row my-5">
        <div class="col-sm-12">
            <?php
            $sql = "SELECT * FROM field";
            $query = mysqli_query($conn, $sql) or die($conn);
            $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

            foreach ($results as $result) { ?>
                <div class="card mb-5">
                    <div class="row no-gutters">
                        <div class="col-4 col-md-4 col-xl-4">
                            <img src="<?= $result['image'] ?>" class="card-img" alt="">
                        </div>
                        <div class="col-8 col-md-8 col-xl-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $result['title'] ?></h5>
                                <p class="card-text"><?= $result['description'] ?></p>
                                <p class="card-text"><a class="text-warning" href="https://www.google.com/maps?q=<?= $result['latitude']?>,<?= $result['longitude']?>" target="_blank">Klikni da saznaš lokaciju</a></p>
                                <?php
                                    if(isset($_SESSION['id'])) {
                                        echo "<div class=\"rating\" field-id=\"{$result['id']}\" data-rating=\"{$result['rating']}\"></div>";
                                    }
                                ?>
                                <p id="message-<?= $result['id'] ?>"></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</div>
<?php
include_once "includes/footer.php";
?>
</body>
