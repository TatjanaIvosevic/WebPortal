<?php
    session_unset();
    session_destroy();
    echo "You have been logout!";
    header('Location:index.php');
?>