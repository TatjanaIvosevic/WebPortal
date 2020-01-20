<?php ?>
<body>
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