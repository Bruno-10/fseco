<?php
require_once("function.php"); 
$nombre = "";
$apellido = "";
$email = "";
$usuario = "";
$password = "";
$rpassword = "";
$perfil = "";

 if ($_POST){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"]; 
    $datos = $_POST;
    $errores = validarRegistracion($datos);
    $resultado = [];
    if (empty($errores)) {

        guardarDatos($datos, "usuarios.json");

        header("location: usuario.php");
    }   

}

?>
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
        <link rel="stylesheet" href="css/registro_1.css">
        <title>Registro</title>
    </head>
    <body>
        <div class="container-fluid padding">
        <?php require_once("header.php"); ?>
                <main class="row col-sm-12 col-md-12 col-lg-12 main margencero">     
                    <div class="col-sm-12 col-md-12 col-lg-6 caja_form">
                        <form action="registro.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <h2>Registrate</h2>
                            <div class="form-column">
                                <div class="col-md-7 col-lg-9">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"  value="<?= $nombre ?>"  required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="apellido">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" id="apellido" value="<?= $apellido ?>" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="perfil">Foto de perfil</label>
                                    <input type="file" class="form-control" name="perfil" id="perfil"  required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>"  required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="usuario">Usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control"  aria-describedby="inputGroupPrepend"  name="usuario" id="usuario" value="<?=$usuario?>"  required>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="password">Contraseña</label>
                                    <input type="password" class="form-control" name="password" id="password" required>
                                </div>
                                <div class="col-md-7 col-lg-9">
                                    <label for="rpassword">Repetir contraseña</label>
                                    <input type="password" class="form-control" name="rpassword" id="rpassword" required>
                                </div>
                                <div class="col-md-7 col-lg-9"> 
                                    <br>
                                    <button class="btn btn-success" type="submit">Enviar</button>
                                    <button class="btn btn-danger" type="submit">Cancelar</button>
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
                
                </main>
                <?php require_once("footer.php"); ?>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    </body>
</html>