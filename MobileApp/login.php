<?php
session_start();
include_once 'db.php';

if(isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
}
?>
<body>
<?php include_once "header.php";?>
<div class="container">
    <div class="row my-5">
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 mt-md-2">
                            <form class="px-4 py-3" action="login_inc.php" method="POST" enctype="multipart/form-data">
                                <h1 class="text-center"> Uloguj se </h1>
                                <p class="text-center">Ukoliko nemaš nalog na našem sajtu, savetujemo ti da odeš na<a href="https://jervolimobasket.tatjana.tech" target="_blank"> naš sajt </a> i registruješ se 😊 </p>
                                <div class="form-group">
                                    <label for="username"> Korisničko ime: </label>
                                    <input type="text" class="form-control" name="username" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="password"> Lozinka : </label>
                                    <input type="password" class="form-control" name="password" autocomplete="off">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                </div>
                                <button type="submit" class="btn btn-primary">Uloguj se</button>
                                <?php
                                if(isset($_GET['error'])) {
                                    $error = $_GET['error'];
                                    if($error == 'username') {
                                        echo 'Username is incorrect';
                                    }
                                    if($error == 'password') {
                                        echo 'Password is incorrect';
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
