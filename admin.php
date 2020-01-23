<?php
session_start();
require "db_config.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query ($conn,$sql);

    if($row = mysqli_num_rows($query) == 1) {
        echo "Login successful!";
        $_SESSION['admin_id'] = 1;
        $_SESSION['username'] = $username;
        header('Location: adminpanel.php');
    } else {
        echo "Login failed!";
        header('Location: admin.php');
    }
}
?>
<body>
<?php include_once "includes/header.php";?>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 mt-md-2">
                                <form class="px-4 py-3" action="admin.php" method="post" enctype="multipart/form-data">
                                    <h1 class="text-center"> Admin panel</h1>
                                    <div class="form-group">
                                        <label for="username"> Username : </label>
                                        <input type="text" class="form-control" name="username" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"> Password : </label>
                                        <input type="password" class="form-control" name="password" autocomplete="off">
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Uloguj se" name="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>