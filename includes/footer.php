<!-- Footer -->
<footer class="page-footer bg-dark pt-4 <?= $bottom ?? ''?>" style="position: absolute; width: 100%; margin-top: -10px;">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase text-warning">ŠKOLSKI PROJEKAT</h5>
                <p class="text-light">U okviru predmeta elektronsko poslovanje i emobil.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase text-warning">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a class="text-light" href="index.php"><i class="fa fa-home"></i> Početna </a>
                    </li>
                    <li>

                        <a class="text-light" href="about.php"><i class="far fa-address-card"></i> O nama </a>
                    </li>
                    <li>
                        <a class="text-light" href="gallery.php"><i class="far fa-image"></i> Galerija </a>
                    </li>
                    <li>
                        <a class="text-light" href="fields.php"><i class="fas fa-basketball-ball"></i> Tereni i sportski centri </a>
                    </li>
                    <li>
                        <a class="text-light" href="registration.php"><i class="fas fa-plus"></i> Dodaj teren </i></a>

                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase text-warning">Društvene mreže</h5>

                <ul class="list-unstyled">
                    <li>
                        <a class="text-light" target="_blank" href="https://www.facebook.com/Jer-Volimo-Basket-106623714214960/?modal=admin_todo_tour"><i class="fab fa-facebook"></i> Facebook</a>
                    </li>
                    <li>
                        <a class="text-light" target="_blank" href="https://www.instagram.com/jervolimobasket/?hl=sr"><i class="fab fa-instagram"></i> Instagram</a>
                    </li>
                    <li>
                        <a class="text-light" target="_blank" href="https://www.youtube.com/watch?v=jSZlwBThW7o"><i class="fab fa-youtube"></i> YouTube</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-warning bg-secondary ">© <?= date('Y') ?> Copyright: VTS
    </div>
    <!-- Copyright -->

</footer>

<script src="assets/lib/jquery/dist/jquery.js"> </script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.js"> </script>
<script src="assets/lib/star-rating-svg/src/jquery.star-rating-svg.js"></script>
<script src="assets/js/app.js"></script>
<?php
if(isset($_GET['error'])) {
        ?>
        <script>
            $('#registrationModal').modal('show')
        </script>
<?php
    }
?>