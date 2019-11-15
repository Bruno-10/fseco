<?php
    session_start();
    require_once("../funciones/function.php");
    require_once("class-carrito.php");
    if($_SESSION["usuario"]){
        $id_user = $_SESSION["usuario"]["id_cliente"];
        $id_producto = $_GET["id"];
        $producto = traerProductoID($id_producto);
        $carrito = new Carrito ($id_producto, $id_user, $producto["precio"], 1);
        $carrito->agregarAcarrito();
        header("location: carrito.php");
    }
    
    
?>