<?php
    require_once("../class-producto.php");
    // require_once("../../db/libreria.php");

    $qs = $_POST;
    $producto1 = new Producto($qs["titulo"], $qs["descripcion"], $qs["precio"], $qs["cantidad"], $qs["categoria"]);
    $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
    $query = $db->prepare("INSERT INTO producto (titulo, descripcion, precio, cantidad, categoria) VALUES ('$producto1->titulo','$producto1->descripcion','$producto1->precio','$producto1->cantidad','$producto1->categoria')");
    $query->execute();
    echo "Se ha creado un nuevo registro!";
    header("location: agregar-admin.php");
     
?>


   