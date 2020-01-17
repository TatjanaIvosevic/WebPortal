<?php

/*session_start();
require "db_config.php";
if(!isset($_SESSION['id'])){
    header('Location: registration.php');
    exit;
}

echo "Hello ".$_SESSION['username'];
*/
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
                           <!-- ADD IMAGE -->
                            <form class="px-4 py-3" action="upload_images.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="courtName">Ime terena:</label>
                                    <input type="text" class="form-control" name="courtName" id="courtName" required><br>
                                </div>

                                <div class="form-group">
                                    <label for="courtAddress">Adresa terena:</label>
                                    <input type="text" class="form-control" name="courtAddress" id="courtAddress" required><br>
                                </div>

                                <div class="form-group">
                                    <label for="fileToUpload">Izaberi sliku:</label>
                                    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload"required><br>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Dodaj teren" name="submit">
                                <?php
                                if(isset($_POST['submit'])){
                                    if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
                                    {
                                        echo " error ";
                                    }
                                    else
                                    {
                                        $image = $_FILES['image']['tmp_name'];
                                        $image = addslashes(file_get_contents($image));
                                        saveimage($image);
                                    }
                                }
                                function saveimage($image)
                                {
                                    global $conn;
                                    $qeury="insert into field (image) values ('$image')";
                                    $result=mysqli_query( $conn,$qeury);
                                    if($result)
                                    {
                                        echo " <br/>Image uploaded.";
                                        header('location:WebPortal/index.php');
                                    }
                                    else
                                    {
                                        echo " error ";
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
</body>
