<?php
    session_start();
    if(!(isset($_SESSION['PROFIL']))) {
        header("location:logIn.php");
    }
?>
