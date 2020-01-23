<?php include 'db_config.php';?>
<?php
    // Fetch the marker info from the database
    $sql = "SELECT * FROM field WHERE status = 1";
    $query = mysqli_query($conn,$sql);
?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPpu2pHwZMCduYt7Pf_2_Ty_RS1k4QG40"></script>
<style>
    #mapCanvas {
    width: 100%;
    height: 650px;
    }
</style>
<?php include_once "includes/header.php"; ?>
<body>
    <?php include_once "includes/navbar.php" ?>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12">
                <!-- FIRST CARD -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 text-center mt-md-2">
                                <h1 class="text-uppercase">O NAMA</h1>
                            </div>
                            <div class="col-sm-12 text-center">
                                <p>ZDRAVO! MI SMO TATJANA I FILIP. STUDENTI SMO TREĆE GODINE NA VISOKOJ TEHNIČKOJ ŠKOLI U SUBOTICI. OVAJ SAJT PRAVIMO U OKVIRU PROJEKATA IZ PREDMETA ELEKTRONSKO POSLOVANJE I E-MOBIL APLIKACIJE. CILJ NAM JE DA NAPRAVIMO SAJT ZA SVE ONE KOJE VOLE DA IGRAJU BASKET I KOŠARKU U SUBOTICI. NA OVOM SAJTU SE NALAZI SPISAK SVIH TERENA NA KOJIMA SE U TOKU GODINE IGRA BASKET ILI ODRZAVAJU TURNIRI. NA IDEJU ZA OVAJ SAJT SMO DOSLI PO PREDLOGU NASEG PROFESORA.
                               <br> NA OVOM SAJTU ĆEMO VAM PREDSTAVITI NAJPOPULARNIJE TERENE. NARAVNO KAKO BI OVAJ SAJT BIO JOš I BOLJI VI ćETE NAM POMOćI TAKO ŠTO ĆETE DODAVATI TERENE KOJI NISU NA NAŠOJ LISTI. <br>
                               ZA VIŠE INFORMACIJA KONTAKTIRAJTE NAS PUTEM NAŠIH MAIL ADRESA ILI PREKO DRUŠTVENIH MREŽA</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GOOGLE MAP -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 text-center mt-md-2">
                                    <p> Mapa Subotice sa obeleženim terenima: </p>
                                    <div id="mapCanvas"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- AUTHORS -->
                <h2 class="text-center"> Autori sajta: </h2>
                <div class="col-sm-6 col-md-6 col-xl-6 card-body text-center float-left">
                    <img class="img-responsive img-thumbnail" alt="Tatjana Ivošević" src="assets/images/tatjana.jpg">
                        <p>Tatjana Ivošević - Miss IT<br>
                            <a href="mailto: tatjana.ivosevic1@gmail.com">tatjana.ivosevic1@gmail.com</a>
                        </p>
                </div>
                <div class="col-sm-6 col-md-6 col-xl-6 card-body text-center float-right">
                    <img class="img-fluid img-thumbnail" alt="Filip Šuput" src="assets/images/filip.jpg">
                        <p>Filip Šuput - Baller<br>
                            <a href="mailto: f.suput98@gmail.com">f.suput98@gmail.com</a>
                        </p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "includes/footer.php"; ?>

    <script>
        function initMap() {
            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap'
            };

            // Display a map on the web page
            map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
            map.setTilt(50);

            // Multiple markers location, latitude, and longitude
            var markers = [
                <?php
                    if(mysqli_num_rows($query) > 0){
                        while($row = mysqli_fetch_assoc($query)){
                            echo '["'.addslashes($row['title']).'", '.$row['latitude'].', '.$row['longitude'].'],';
                        }
                    }
                ?>
            ];

            // Info window content
            var infoWindowContent = [
                <?php if(mysqli_num_rows($query) > 0){
                    while($row = mysqli_fetch_assoc($query)){
                        ?>
                            [
                                '<div class="info_content">' +
                                '<h3><?php echo $row['title']; ?></h3>' +
                                '<p><?php echo $row['description']; ?></p>' +
                                '</div>'
                            ],
                    <?php
                    }
                }
                ?>
            ];

            // Add multiple markers to map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Place each marker on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Add info window to marker
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Center the map to fit all markers on the screen
                map.fitBounds(bounds);
            }

            // Set zoom level
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                this.setZoom(14);
                google.maps.event.removeListener(boundsListener);
            });

        }

        // Load initialize function
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>