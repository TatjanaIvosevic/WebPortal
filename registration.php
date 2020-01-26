<?php
session_start();
require "db_config.php";

 if(isset($_SESSION['id'])){
     header('Location: addfield.php');
     exit;
 }
 ?>
<?php include_once "includes/header.php"; ?>
<body>
<?php include_once "includes/navbar.php"; ?>
<div class="container">
    <div class="row my-5">
        <div class="col-sm-12">
            <!-- CARD -->
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 text-center mt-md-2">
                            <h2>Da li imate nalog?</h2>
                            <p>Samo registrovani korisnici smeju da dodaju terene.</p>
                            <p>Zato popuni jednostavnu formu i uživaj u pogodnostima, koje ti nudimo kao registrovanom korisniku ili se pak uloguj sa postojećim nalogom.</p>

                            <!-- TRIGGER BUTTON FOR REGISTRATION -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#registrationModal">
                                Registruj se
                            </button>


                            <!-- MODAL FOR REGISTRATION -->
                            <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="registrationModalLabel">Forma za registraciju</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="px-4 py-3" method="post" action="registration_inc.php">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1">Unesi svoj "username":</label>
                                                    <input type="text" class="form-control" name="username" id="exampleDropdownFormUsername" placeholder="Korisničko ime" maxlength="20" minlength="2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1">Unesi svoj e-mail:</label>
                                                    <input type="email" class="form-control" name="email" id="exampleDropdownFormEmail" placeholder="E-mail" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1">Unesi svoju lozinku:</label>
                                                    <input type="password" class="form-control" name="password" id="exampleFormPassword1" placeholder="Šifra" maxlength="20" minlength="5" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1">Ponovi svoju lozinku:</label>
                                                    <input type="password" class="form-control" name="repeat_password" id="exampleFormPassword2" placeholder="Potvrdi šifru" required>
                                                </div>
                                                
                                                <button type="submit" id="register_button" class="btn btn-warning">Registruj se</button><br>
                                                <?php
                                                if(isset($_GET['error'])){
                                                    $error = $_GET['error'];
                                                    if($error == 'usernameExists')
                                                        echo 'Korisnik već postoji.';
                                                    if($error == 'empty')
                                                        echo 'Molimo Vas, popunite sva polja!';
                                                    if($error == 'usernameIncorrect')
                                                        echo 'Tvoje korisničko ime je nepravilno napisano.';
                                                    if($error == 'emailIncorrect')
                                                        echo 'Tvoja e-mail adresa je neispravna.';
                                                    if($error == 'verification')
                                                        echo 'Doslo je do greske... Pokusajte ponovo kasnije';

                                                }

                                                if(isset($_GET['message'])){
                                                    $message = $_GET['message'];
                                                    if($message == 'emailVerification'){
                                                        echo 'Mail sa linkom za verifikovanje vašeg naloga, je poslat na Vašu e-mail adresu. Molim Vas, proverite Vašu poštu i dovršite registraciju Vašeg naloga, na našem sajtu.';
                                                    }
                                                }
                                                ?>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- TRIGGER BUTTON FOR LOGIN-->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#loginModal">
                                Uloguj se
                            </button>

                            <!-- MODAL FOR LOGIN -->
                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="loginModalLabel">Log in forma</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="px-4 py-3" method="post" action="login_inc.php">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail">Unesi svoj "username":</label>
                                                    <input type="text" class="form-control" name="username" id="exampleDropdownFormEmail1" placeholder="Korisničko ime" maxlength="20" minlength="2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword">Unesi svoju lozinku:</label>
                                                    <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword1" placeholder="Sifra" maxlength="20" minlength="5" required>
                                                </div>
                                                <div class="form-group">
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
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Zaboravio/la si lozinku?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $bottom = 'fixed-bottom';
    include_once "includes/footer.php";
?>
</body>