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
    $imagen = $_FILES["imgProducto"];
    $producto1 = new Producto($qs["titulo"], $qs["descripcion"], $qs["precio"], $qs["cantidad"], $imagen, $qs["categoria"]);
    $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);

    $titulo = $producto1->getTitulo();
    $descripcion = $producto1->getDescripcion();
    $precio = $producto1->getPrecio();
    $cantidad = $producto1->getCantidad();
    $imagenBD = addslashes(file_get_contents($producto1->getImagen()["tmp_name"]));
    $categoria = $producto1->getCategoria();
    

    $query = $db->prepare("INSERT INTO producto (titulo, descripcion, precio, cantidad, imgProducto, categoria) VALUES (:titulo, :descripcion, :precio, :cantidad, '$imagenBD', :categoria)");

    $query->bindValue(":titulo", $titulo);
    $query->bindValue(":descripcion", $descripcion);
    $query->bindValue(":precio", $precio);
    $query->bindValue(":cantidad", $cantidad);
    $query->bindValue(":categoria", $categoria);

    $query->execute();
    echo "Se ha creado un nuevo registro!";
    header("location: consulta-admin.php");    
?>


   