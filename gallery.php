<?php include_once "includes/header.php";
    require_once "db_config.php";
?>
    <body>
    <?php include_once "includes/navbar.php"; ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12">
                <!-- CARD -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 text-center mt-md-2">
                                <h3 class="text-uppercase">Ovde možete pogledati sve slike naših terena</h3>
                            </div>
                            <!-- CAROUSEL -->
                            <div class="col-sm-12 mt-md-2">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php
                                        $sql = "SELECT * FROM field";
                                        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                        $results= mysqli_fetch_all($query,MYSQLI_ASSOC);

                                        for($i=0; $i<count($results);$i++){
                                            if ($i == 0){
                                                echo "<li class='active' data-target=\"#carouselExampleIndicators\" data-slide-to=\"$i\"></li>";
                                            } else {
                                                echo "<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"$i\"></li>";
                                            }
                                        }
                                        ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php
                                        $counter = 0;
                                        foreach($results as $result){
                                            if($counter == 0){
                                                echo "<div class=\"active carousel-item\">";
                                            } else {
                                                echo "<div class=\"carousel-item\">";
                                            }
                                            ?>
                                                <img class="d-block w-100" src="<?= $result["image"] ?>" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5><?= $result["title"]?></h5>
                                                </div>
                                            </div>
                                            <?php
                                            $counter++;
                                        }
                                        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "includes/footer.php"; ?>
    </body>

<!-- JAVASCRIPT FOR CAROUSEL -->
<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
