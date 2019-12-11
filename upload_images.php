<?php
require_once 'db_config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['but_upload'])){

        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){

        // Insert record
        $query = "insert into images(name) values('".$name."')";
        mysqli_query($con,$query);

        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

    }

    }
    ?>

    <form method="post" action="" enctype='multipart/form-data'>
        <input type='file' name='file' />
        <input type='submit' value='Save name' name='but_upload'>
    </form>
    <!--Select the name or path of the image which you have stored in the database table and use it in the image source.-->
    <?php

        $sql = "select name from images where id=1";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);

        $image = $row['name'];
        $image_src = "upload/".$image;

    ?>
    <img src='<?php echo $image_src;  ?>' >
</body>
</html>