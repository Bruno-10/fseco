<?php
    //recibo conjunto de datos por get o por post 

    //incluyo objetos o funciones que van procesar 
    //pasar los datos a los correspondientes objetos  o funciones
    //ejecutar metodos de validacion
    //si no me da error ejecuto la accion para guardar datos
    //redirijo mensaje con mensaje de exito

    //si me da error
    //guardo los errores en $_SESSION["ERRORES REGISTRO"]
    //redirijo al formulario ppal
    



    require_once("../class-producto.php");
    $qs = $_POST;
    $producto1 = new Producto($qs["titulo"], $qs["descripcion"], $qs["precio"], $qs["cantidad"], $qs["categoria"]);
    $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
    $query = $db->prepare("INSERT INTO producto (titulo, descripcion, precio, cantidad, categoria) VALUES ('$producto1->titulo','$producto1->descripcion','$producto1->precio','$producto1->cantidad','$producto1->categoria')");
    $query->execute();
    echo "Se ha creado un nuevo registro!";
    header("location: agregar-admin.php");    
?>


   