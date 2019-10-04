<?php
    if ($_POST) {
    $dato = [
      "nombre" => $_POST["nombre"],
      "apellido" => $_POST["apellido"],
      "email" => $_POST["email"],
      "usuario" => $_POST["usuario"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
    ];
    $archivo = "usuarios.json";
  }
function guardarDatos($dato, $archivo){
  $resultado = false;
  $archivoNuevo = FILE_GET_CONTENTS($archivo);
  if ($archivoNuevo){
      $resultado = true;
      $array = json_decode($archivoNuevo, true);
      $array [] = $dato;
      $jsonFinal = json_encode($array);
      file_put_contents($archivo, $jsonFinal);
  }
  return $resultado;
}

function validarRegistracion($datos){
  $errores = [];
  //validar password//
  if (($datos["password"] == "") && ($datos["rpassword"] == "")) {
    $errores []= "<p>*Los dos campos de contraseña estan vacios</p>";
  } else if ($datos["password"] == "") { 
    $errores []= "<p>La contraseña esta vacia</p>";
  } else if ($datos["rpassword"] == "") {
    $errores [] = "<p>*Falta la confirmacion de contraseña</p>";
  } else if ($datos["password"] != $datos["rpassword"]) {
    $errores []= "<p>*Las contraseñas no verifican</p>";
  } 
  //validar registro
  if (strlen($datos["nombre"]) == 0){
    $errores [] =  "<p>*No llenaste el Nombre <br></p>";
  }
  if (strlen($datos["apellido"]) == 0){
    $errores [] = "<p>*No llenaste el Apellido <br></p>";
  }
  if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores [] = "<p>*El email ingresado no es valido <br></p>";
  }
  if ((strlen($datos["usuario"]) < 8)){
    $errores [] = "<p>*El usuario debe tener mas de 8 caracteres <br></p>";
  }
  //validar imagen //
 /*  if ($datos["perfil"]["error"] != 0){
      $errores [] = "<P>*Hubo error al cargar la imagen</p>";
   } else {
     $ext = pathinfo($datos["perfil"]["name"], PATHINFO_EXTENSION);
     if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
       $errores [] = "<p>*La imagen debe ser jpg, jpeg o png </p>";
     } else{
       move_uploaded_file($datos["perfil"]["tmp_name"], "archivo/ImgUser." . $ext);
     }
   }  */
   return $errores;
}


 

function buscarDatos($dato, $archivo){
  $resultado = [];
  $archivoNuevo = FILE_GET_CONTENTS($archivo);
  if ($archivoNuevo){
      $resultado = true;
      $array = json_decode($archivoNuevo, true);
      foreach ($array as $key => $value) {
              if ($dato == $value){
                  $resultado = ($array[$key]);
              }
              else {
                $resultado = null;
              }
          }
  }
  return $resultado;
}







  
?>


