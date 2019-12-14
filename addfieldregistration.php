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
                            <h2>Da li ste registrovani?</h2>
                            <p>Samo registrovani korisnici smeju da dodaju terene.</p>
                            <p>Zato popuni jednostavnu formu i uživaj u pogodnostima, koje ti nudimo kao registrovanom korisniku.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">
                                Registruj se
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="registrationModalLabel">Uloguj se</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="px-4 py-3">
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleDropdownFormPassword1">Password</label>
                                                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                        <label class="form-check-label" for="dropdownCheck">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </form>
                                            <div class="dropdown-divider"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="dropdown-item" href="#">New around here? Sign up</a>
                                            <a class="dropdown-item" href="#">Forgot password?</a>
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
<?php include_once "includes/footer.php"; ?>
</body>

<script>
    $('#registrationModal').modal('show');
</script>