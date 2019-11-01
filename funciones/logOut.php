<?php 
    session_start();
    $_SESSION["usuario"] = [];
    header("location: ../usuario/login.php");
?>