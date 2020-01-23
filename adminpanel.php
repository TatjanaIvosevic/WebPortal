<?php
session_start();
require "db_config.php";
if(!isset($_SESSION['admin_id'])) {
    header('Location: admin.php');
    exit;
}
include_once "includes/header.php";
?>
<div class="container">
    <div class="row my-5">
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-14 mt-md-2">
                            <h1 class="text-center"> Admin panel</h1>

                            <?php
                            $sql = "SELECT * FROM field WHERE status = 0";
                            $result = mysqli_query($conn, $sql);
                            ?>

                            <form action=""method="post">
                                <table class="table" action="admin.php" method="post" enctype="multipart/form-data">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Slika terena</th>
                                            <th scope="col">Ime terena</th>
                                            <th scope="col">Opis terena</th>
                                            <th scope="col">Promeni status</th>
                                            <th scope="col">Adresa</th>
                                            <th scope="col">Geografska širina</th>
                                            <th scope="col">Geografska dužina</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            echo "<tr>
                                                <td> " . $row['id'] . "</td>
                                                <td> " . $row['image'] . "</td>
                                                <td> " . $row['title'] . "</td>
                                                <td> " . $row['description'] . "</td>
                                                <td> " . $row['status'] . "</td>
                                                <td> " . $row['address'] . "</td>
                                                <td> " . $row['latitude'] . "</td>
                                                <td> " . $row['longitude'] . "</td>
                                                <td> " . "<a href='edit.php?id={$row['id']};'>Edit</a>" ."</td>
                                                <td> " . "<a href='delete.php?id={$row['id']};'>Delete</a>" ."</td>
                                                </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </form>
                            <a href="logout.php">Odjavi se!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
