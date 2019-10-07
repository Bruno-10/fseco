<?php 
session_start();
//capturamos la variable
$producto_id=$_GET["producto_id"];
//traemos el archivo productos.json y buscamos el producto asignado 
$jsonDeProductos = file_get_contents("productos.json");
$listadoDeProductos = json_decode($jsonDeProductos, true);


foreach ($listadoDeProductos as $producto){
    foreach ($producto as $key => $valor){
        if( $producto_id == $valor){
            $_SESSION["carrito"] = $producto;
            header("location:carrito.php");
            exit;
        }
    }
}





?>