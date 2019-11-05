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
                        </tr>
                        <tr>
                            <td scope="col border">1</td>
                            <td scope="col border">Paleta</td>
                            <td scope="col border">10</th>
                            <td scope="col border">vacia</td>
                        </tr>
                        <tr>
                                <td scope="col border">2</td>
                                <td scope="col border">Pelota</td>
                                <td scope="col border">29</td>
                                <td scope="col border">vacia</td>
                        </tr>
                        <tr>
                                <td scope="col border">3</td>
                                <td scope="col border">Short</td>
                                <td scope="col border">9</td>
                                <td scope="col border">vacia</td>
                            </tr>
                </table>         
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 caja_derecha">
                <form action="registro.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-column">
                        <div class="col-md-7 col-lg-9">
                            <label for="nombre">Id</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  value="" required>
                        </div>
                        <div class="col-md-7 col-lg-9">
                            <label for="apellido">Titulo</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" value=" " required>
                        </div>
                        <div class="col-md-7 col-lg-9">
                            <label for="perfil">Descripcion</label>
                            <input type="text" class="form-control" name="email" id="email" value=" "  required>
                        </div>
                        <div class="col-md-7 col-lg-9">
                            <label for="precio">Precio</label>
                            <input type="text" class="form-control" name="email" id="email" value=" "  required>
                        </div>
                        <div class="col-md-7 col-lg-9">
                                <label for="email">Cantidad</label>
                                <input type="email" class="form-control" name="email" id="email" value=" "  required>
                            </div>
                            <div class="col-md-7 col-lg-9">
                                    <label for="email">Imagen</label>
                                    <input type="file" class="form-control" name="perfil" id="perfil"   required>
                                    
                                </div>
                        </div>
                        <div class="col-md-7 col-lg-9"> 
                            <br>
                            <button class="btn btn-success" type="submit">Agregar</button>
                            <button class="btn btn-danger" type="submit">Cancelar</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>