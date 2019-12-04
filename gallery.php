<?php include_once "includes/header.php"; ?>
    <body>
    <?php include_once "includes/navbar.php"; ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12">
                <!-- FIRST CARD -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 text-center mt-md-2">
                                <h3 class="text-uppercase">Ovde možete pogledati sve slike naših terena</h3>
                            </div>
                            <div class="col-sm-12 mt-md-2">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="assets/images/heart.png" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>...</h5>
                                                <p>...</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/heart.png" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>...</h5>
                                                <p>...</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="assets/images/heart.png" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>...</h5>
                                                <p>...</p>
                                            </div>
                                        </div>
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

<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
