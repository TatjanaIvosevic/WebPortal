<?php require "db_config.php"; ?>
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
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#registrationModal">
                                Registruj se
                            </button>

                            <!-- MODAL -->
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
                                                    <input type="text" class="form-control" name="Username" id="exampleDropdownFormEmail1" placeholder="Korisničko ime" maxlength="20" minlength="2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1">Unesi svoju lozinku:</label>
                                                    <input type="password" class="form-control" name="password" id="exampleDropdownFormPassword1" placeholder="Sifra" maxlength="20" minlength="5" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1">Ponovi svoju lozinku:</label>
                                                    <input type="password" class="form-control" name="repeat_password" id="exampleDropdownFormPassword2" placeholder="Potvrdi sifru" maxlength="20" minlength="5" required>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                        <label class="form-check-label" for="dropdownCheck">
                                                            Zapamti me
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-warning">Registruj se</button>
                                                <?php
                                                if(isset($_GET['error'])){
                                                    $error = $_GET['error'];
                                                    if($error == 'usernameExists')
                                                        echo 'Username already exists';
                                                    if($error == 'empty')
                                                        echo 'Please fill out all fields';
                                                    if($error == 'usernameIncorrect')
                                                        echo 'Your username is incorrect';
                                                }
                                                ?>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="dropdown-item" href="#">Novi korisnik? Registruj se</a>
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