<?php
session_start();
require_once("../funciones/function.php"); 
$usuario = "";
$password = "";
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
        <link rel="stylesheet" href="../css/master.css">
        <link rel="stylesheet" href="../css/login_1.css">
        <link rel="stylesheet" href="../css/footer1.css">
        <title>LOGIN</title> 
    </head>
    <body>
      <div>
        <?php require_once("../recursos/header.php");?>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
          <h2>Login</h2>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <form action="procesar_login.php" method="POST" enctype="multipart/form-data">
            <div class="imgcontainer">
              <img src="../img/img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
            <p id="errorLogin"> <?php
            if(isset($_GET["error"]))
            {echo "Usuario o contraseña incorrectos, por favor intente de nuevo. <br>";}
            else {echo "<br>";}; 
             ?> </p>
              <label for="usuario"><b>Usuario</b></label>
                <input type="text" placeholder="Ingrese usuario" name="usuario"  id="usuario" required>
              <label for="pass"><b>Contraseña</b></label>
                <input type="password" placeholder="Ingrese contraseña" name="password" id="password" required>  
              <button class="login" type="submit">Ingresar</button>
              <label>
                <input type="checkbox" checked="checked" name="remember" id="remember"> Recordarme
              </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancelar</button>
              <span class="psw"><a href="#">Recuperar contraseña</a></span>
            </div>
            
        </form>
      </div>
      <div>
        <?php require_once("../recursos/footer.php"); ?>
      </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>