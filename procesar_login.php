<?php
session_start();
if ($_POST) {
    include("function.php");
    session_start();
    $dato = $_POST["usuario"];
    $archivo = "usuarios.json";
    buscarDatos($dato, $archivo);
    $_SESSION["perfil"] = $resultado;
    header ("location: usuario.php");
}
else {
   header ("location: login.php");
}
?>
