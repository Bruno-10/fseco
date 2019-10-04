<?php
function crearUsuario() {
    $usuario = [
      "email" => $_POST["email"],
      "username" => $_POST["username"],
      "password" => password_hash($_POST["password"], PASSWORD_DEFAULT)
    ];
  $archivo = file_get_contents("usuarios.json");
  $array = json_decode($archivo, true);
  $array[] = $usuario;
  $jsonFinal = json_encode($array);
  $archivoFinal = file_put_contents("usuarios.json", $jsonFinal);    
}

function validarPass($password, $rpassword) {
  $retorno = "";
  if (($password == "") && ($rpassword == "")) {
    $retorno = "<p>*Los dos campos de contraseña estan vacios</p>";
  } else if ($password == "") { 
    $retorno = "<p>La contraseña esta vacia</p>";
  } else if ($password == "") {
    $retorno = "<p>*Falta la confirmacion de contraseña</p>";
  } else if ($password != $rpassword) {
    $retorno = "<p>*Las contraseñas no verifican</p>";
  } 
  return $retorno;
 }



function validarReg($nombre,$apellido,$email,$usuario){

  $return = [];

  if (strlen($nombre) == 0){
    $return[] =  "<p>*No llenaste el Nombre <br></p>";
  }

  if (strlen($apellido) == 0){
    $return[] = "<p>*No llenaste el Apellido <br></p>";
  }

  if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $return[] = "<p>*El email ingresado no es valido <br></p>";
  }

  if ((strlen($usuario) < 8)){
    $return[] = "<p>*El usuario debe tener mas de 8 caracteres <br></p>";
  }
//   if ($archivo === UPLOAD_ERR_OK){
//       $return[] = "<p>*El archivo genero un error. <br></p>";
//   }
  return $return;
 }

 function validarImg($perfil){
   $errorImg = "";
   if ($perfil["perfil"]["error"] != 0){
      $errorImg = "<P>*Hubo error al cargar la imagen</p>";
   } else {
     $ext = pathinfo($perfil["perfil"]["name"], PATHINFO_EXTENSION);

     if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
       $errorImg = "<p>*La imagen debe ser jpg, jpeg o png </p>";
     } else{
       move_uploaded_file($perfil["perfil"]["tmp_name"], "Archivo/ImgUser." . $ext);
     }
   }
   return $errorImg;
 }


 
if ($_POST){

  foreach (validarReg($nombre,$apellido,$email,$usuario) as $value) {
      echo $value;
    }
    
    echo validarImg($_FILES);
    echo validarPass($password, $rpassword);

}
  
?>


