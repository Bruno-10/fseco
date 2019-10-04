<?php
    if ($_POST) {
    $dato = [
      "nombre" => $_POST["nombre"],
      "apellido" => $_POST["apellido"],
      "email" => $_POST["email"],
      "usuario" => $_POST["usuario"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
    ];
  }


  function guardarImg($imagen){
    $n = rand(0,1000);
    $ext = pathinfo($imagen["name"], PATHINFO_EXTENSION);
     move_uploaded_file($imagen["tmp_name"], "Archivo/ImgUser$n." . $ext);
   }

  function guardarDatos($que, $donde){
    //$QUE so los los datos que vamos a guardar
    //$DONDE es la ubicacion del archivo 
    $exito = false;

    $archivo = FILE_GET_CONTENTS($donde);
    if ($archivo){
        $exito = true;
        $array = json_decode($archivo, true);
        $array [] = $que;
        $jsonFinal = json_encode($array) ;
        file_put_contents($donde, $jsonFinal);
    }
    //en caso de errro return false

    return $exito;


}

function validarRegistracion($datos){
  $datos["perfil"] = $_FILES["perfil"]; 
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
  if ($datos["perfil"]["error"] != 0){
      $errores [] = "<P>*Hubo error al cargar la imagen</p>";
   } else {
     $ext = pathinfo($datos["perfil"]["name"], PATHINFO_EXTENSION);
     if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
       $errores [] = "<p>*La imagen debe ser jpg, jpeg o png </p>";
     } 
   }  
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


