<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="css/footer1.css">
        <link rel="stylesheet" href="css/caja.css">
        <title>Registro</title>
    </head>
    <body>
        <div class="container-fluid padding">
        <?php require_once("header.php"); ?>
                <main class="row col-sm-12 col-md-12 col-lg-12 main margencero">     
                    <div class="col-sm-12 col-md-12 col-lg-5 caja_form">
                        <form action="registro.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <h2>Completa tu direccion de entrega</h2>
                            <div class="form-column">
                                <div class="col-md-7 col-lg-9">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"  value=""  required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Ciudad</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Localidad</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Calle</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Numero</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Piso</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Entre Calles</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Telefono</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-7 col-lg-9 errores">
                        <?php 
                            if($_POST){
                                foreach($errores as $error){
                        
                                   echo $error;
                            } 
                        }
                            
                        
                        ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5 caja_form">
                    <table class="table border pedido">
                                <thead class="fondo">
                                    <tr>
                                    <th scope="col border"></th>
                                    <th scope="col border">Producto</th>
                                    <th scope="col border">Precio</th>
                                    <th scope="col border">Cantidad</th>
                                    <th scope="col border">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                            <tr>
                                                <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/paleta_2.jpg"> </th>
                                                    <td>Paleta 2 </td>
                                                    <td>$3500</td>
                                                    <td>1</td>
                                                    <td> </td>
                                        </tr> 
                                        
                                            <tr>
                                                <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/paleta_2.jpg"> </th>
                                                    <td>Paleta 2 </td>
                                                    <td>$4000 </td>
                                                    <td>3</td>
                                                    <td></td>  
                                        </tr> 
                                        <tr>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> </td>
                                        <td> $15500</td>
                                        </tr>                               
                            
                                </tbody>
                            </table>
                    </div>
                </main>
                <section class="col-sm-12 col-md-12 col-lg-12 caja_pagos">
                <div class="col-sm-12 col-md-12 col-lg-5 caja_form">
                        <form action="registro.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <h2>MEDIOS DE PAGO</h2>
                            <div class="form-column">
                                <div class="col-md-7 col-lg-9">
                                    <label for="nombre">Numero de tarjeta</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"  value=""  required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Nombre en la tarjeta</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Expiracion</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Codigo de seguridad</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="   " required>
                                </div>
                                <div class="col-md-7 col-lg-9 recordar">
                                    <input type="checkbox" name="recordar" id="recordar">Recibir confirmacion de pedido por sms   
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="comentarios">Notas adicionales</label>
                                    <br>
                                    <input type="text" class="text" name="notas" id="notas">
                                </div>
                                <div class="col-md-7 col-lg-9"> 
                                    <br>
                                    <button class="btn btn-success" type="submit">Enviar pedido</button>
                                    <button class="btn btn-danger" type="submit">Cancelar</button>
                                </div>

                </section>
                <?php require_once("footer.php"); ?>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    </body>
</html>