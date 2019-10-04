<?php 
    session_start();

    $_SESSION["perfil"] = $_POST; 
    include("function.php");
 
$dato = $_SESSION["perfil"];
$archivo = "usuarios.json";
guardarDatos($dato, $archivo);
header("location: usuario.php");


?>