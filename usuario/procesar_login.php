<?php
session_start();
require_once("../funciones/function.php"); 

 if ($_POST && $_POST["usuario"] != "administrador"){
    $datos = $_POST;
    $resultado = validarLogin($datos,"cliente");
    if ($resultado != []){ 
     $_SESSION["usuario"] = $resultado;
    header("location: ../usuario/usuario.php");
  }
    else {
      header("location: login.php?error=true");
    }
}
  else if ($_POST && $_POST["usuario"] == "administrador") {
        $datos = $_POST;
        $resultado = validarLogin($datos,"administrador");
         if ($resultado != []){ 
              $_SESSION["usuario"] = $resultado;
              header("location: ../producto/admin/agregar-admin.php");
          }   
            else {
                header("location: login.php?error=true");
            }
  }
?>