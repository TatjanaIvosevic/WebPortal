<?php require "db_config.php"; ?>
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
                           <!-- ADD IMAGE -->
                            <form method="POST" enctype="multipart/form-data">
                                <input type="file" name="image">
                                <input type="submit" name="submit" value="upload">
                            </form>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>
</body>
