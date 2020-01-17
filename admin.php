<?php
if(isset($_POST['submit'])){
    require "db-config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = password_hash ($password,PASSWORD_DEFAULT);
    $sql = "INSERT INTO admin(username,password) VALUES ('$username','$hashedPassword');";
    $query = mysqli_query ($connection,$sql);
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2" >
            <h1>Admin page</h1>
        </div>
    </div>
</div>

<form action="admin.php" method="post">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="text" name="password">
    <button type="submit" name="submit">SEND</button>
</form>
