<?php 

    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['is_logged']);
    header('Location: ../../index.php');

?>