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
                                            <h5 class="modal-title" id="registrationModalLabel">Registracija</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <input type="text" name="name" value="Upisi svoje ime">
                                                <input type="text" name="surname" value="Upisi svoje prezime">
                                                <input type="text" name="username" value="Upisi ime koje ces koristiti na sajtu">
                                                <input type="password" name="password" value="Upisi svoje lozinku">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Otkaži</button>
                                            <button type="button" class="btn btn-primary">Pošalji</button>
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
    $('#myModal').modal('show');
</script>