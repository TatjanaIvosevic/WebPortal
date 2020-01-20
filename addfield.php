<?php
session_start();
require "db_config.php";
if(!isset($_SESSION['username'])) {
    header('Location: registration.php');
    exit;
}
?>
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
                        <div class="col-sm-12 mt-md-2">
                           <!-- FORM -->
                            <form class="px-4 py-3" action="addfield.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="image">Izaberi sliku:</label>
                                    <input type="file" class="form-control" name="image" required><br>
                                </div>

                                <div class="form-group">
                                    <label for="title">Ime terena:</label>
                                    <input type="text" class="form-control" name="title" required><br>
                                </div>


                                <div class="form-group">
                                    <label for="description">Opis terena:</label>
                                    <input type="text" class="form-control" name="description" required><br>
                                </div>

                                <div class="form-group">
                                    <label for="address">Adresa terena:</label>
                                    <input type="text" class="form-control" name="address" required><br>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Dodaj teren" name="submit">

                                <?php
                                    if(isset($_POST['submit'])) {
                                        $image = $_FILES['image'];
                                        $title = $_POST['title'];
                                        $description = $_POST['description'];
                                        $address = $_POST['address'];

                                        if (!exif_imagetype($_FILES['image']['tmp_name'])) {
                                            echo "Došlo je do problema sa slanjem slike, pokušajte ponovo.";
                                            exit;
                                        } else {
                                            $image = $_FILES['image']['tmp_name'];
                                            $path = 'assets/images/fields';
                                            $imageArray = explode('.',$_FILES['image']['name']);
                                            $imageExtension = end($imageArray);
                                            $databaseName = time().'.'.$imageExtension;
                                            $uploadPath = $path.'/'.$databaseName;
                                            $upload = move_uploaded_file($_FILES['image']['tmp_name'],$uploadPath);
                                            if(!$upload) {
                                                echo "Došlo je do problema sa slanjem slike, pokušajte ponovo.";
                                                exit;
                                            }
                                            $sql = "INSERT INTO field (image, title, description, address) VALUES ('$databaseName', '$title', '$description', '$address')";
                                            $result = mysqli_query($conn, $sql);

                                            if ($result) {
                                                echo "<br>";
                                                echo "Hvala Vam, što doprinosite zajednici košarkaša u Subotici.
                                                Podaci su uspešno poslati i nakon provere, biće postavljeni na sajt. :) ";
                                            } else {
                                                echo "Došlo je do problema...Molimo Vas, pokušajte kasnije.";
                                                header('Location: addfield.php');
                                            }
                                        }
                                    }
                                ?>
                            </form>

                            <!-- MOBILE APP -->
                            <div class="col-sm-12 text-center">
                                <h2>~ IMAMO I MOBILNU APLIKACIJU ~</h2>
                                <p>Preuzimanjem naše aplikacije, imate mogućnost ekskluzivnog pregleda svih eventova, koji se odigravaju na terenima u Subotici.</p>
                                <p>Preuzmite besplatnu aplikaciju: <a href="downloadapp"> 🏀 PlayBasket</a></p>
                            </div>
                            <a href="logout.php">Odjavi se!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
</body>
