<?php
session_start();
include_once 'db.php';
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
} ?>
<?php include_once 'header.php'; ?>
<body>
    <div>
        <ul class="nav nav-pills nav-fill mb-3 bg-warning" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-events-tab" data-toggle="pill" href="#events" role="tab" aria-controls="events" aria-selected="true"><i class="far fa-calendar-check"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-favorites-tab" data-toggle="pill" href="#favorites" role="tab" aria-controls="favorites" aria-selected="false"><i class="far fa-calendar-plus"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-expired-tab" data-toggle="pill" href="#expired" role="tab" aria-controls="expired" aria-selected="false"><i class="far fa-calendar-times"></i></a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="events" role="tabpanel" aria-labelledby="pills-events-tab"><?php include_once 'events.php'; ?></div>
            <div class="tab-pane fade" id="favorites" role="tabpanel" aria-labelledby="pills-favorites-tab"><?php include_once 'favorites.php'; ?></div>
            <div class="tab-pane fade" id="expired" role="tabpanel" aria-labelledby="pills-expired-tab"><?php include_once 'expired.php'; ?>
        </div>
    </div>

    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
</body>