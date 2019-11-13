<?php
require_once("../../funciones/function.php");

if ($_POST){
    $dato = $_POST;
    $resultado = modificarProducto($dato);
    if ($resultado == "exito") {
        header("location:consulta-admin.php?exito");
    } else {
        header("location:consulta-admin.php?error");
    }
}

?>






