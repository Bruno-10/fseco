<?php
session_start();
require_once("../funciones/function.php"); 

 if ($_POST){
    $datos = $_POST;
    $resultado = validarLogin($datos);
    if ($resultado != []){ 
     $_SESSION["usuario"] = $resultado;
    header("location: ../usuario/usuario.php");
  }
    else {
      header("location: login.php?error=true");
    }
};   
?>