<?php 
    session_start();
    $_SESSION["usuario"] = [];
    header("location: login.php");
?>