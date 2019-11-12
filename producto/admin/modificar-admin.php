<?php
    require_once("../../funciones/function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://use.fontawesome.com/1d3c969340.js"></script>
    <link rel="stylesheet" href="../../css/admin-producto.css">
    <title>Document</title>
</head>
<body>
<?php require_once("header-admin.php");?>
    <div class="contenedor col-sm-12 col-md-12 col-lg-12">
        <div class="col-sm-12 col-md-12 col-lg-6 caja_izquierda">
                <table class="table border">
                        <tr>
                            <th scope="col border">Id</th>
                            <th scope="col border">Titulo</th>
                            <th scope="col border">Cantidad</th>
                            <th scope="col border">Imagen</th>
                            <th scope="col border"></th>
                            <th scope="col border"></th>
                        </tr>
                        <?php 
                         
                        $result = listarProductos();
                        foreach ($result as $producto){ 
                            ?>
                            <tr>
                                <td scope="col border"><?php echo $producto["id_prod"]; ?> </td>
                                <td scope="col border"><?php echo $producto["titulo"]; ?></td>
                                <td scope="col border"><?php echo $producto["cantidad"]; ?></td>
                                <td scope="col border"><img src='data:image/jpg;base64,<?php echo base64_encode($producto["imgProducto"])?>'></td>
                                <td scope="col border">
                                    <a class="btn btn-success" href="procesar-modificar.php"> Modificar </a>
                                </td>
                                <td scope="col border">
                                <a class="btn btn-danger" href="procesar-modificar.php"> Eliminar</a></td>
                            </tr>
                        <?php } ?>
                </table>         
        </div>
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>