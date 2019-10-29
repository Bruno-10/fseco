<?php
  function dibujarProductosCarrito($productos){
    
    foreach ($productos as $producto => $value){
        echo 
        ('
            <tr>
                <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/paleta_2.jpg"> </th>
                    <td>' . $value["nombre"] . ' </td>
                    <td>' . $value["id"] . ' </td>
                    <td><input type="text"></td>
        </tr> 
        ');
    }
  }
  function dibujarProductosCaja($productos){ 
    foreach ($productos as $producto => $value){
        echo 
        ('
            <tr>
                <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/paleta_2.jpg"> </th>
                    <td>' . $value["nombre"] . ' </td>
                    <td>' . $value["id"] . ' </td>
                    <td></td>
        </tr> 
        ');
    }
  }  
  function guardarImg($imagen){
    $id = rand(0, 2000000000);
    $_POST["imageId"] = $id;
    $ext = pathinfo($imagen["name"], PATHINFO_EXTENSION);
    $_POST["imageExt"] = pathinfo($imagen["name"], PATHINFO_EXTENSION);
     move_uploaded_file($imagen["tmp_name"], "Archivo/ImgUser$id." . $ext);
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

function datoPreexistente($datos, $archivo, $que){
  // $que es el dato a verificar
        $usuarios_json = file_get_contents($archivo);
        $usuarios = json_decode($usuarios_json, true);
        $resultado = "dato existente";
        foreach ($usuarios as $arrayUsuario) {
                foreach ($arrayUsuario as $usuario => $valor) {
                        if ($que == $valor) {
                            $resultado = $arrayUsuario;
                            return $resultado;
                        }
        else {
            $resultado = " ";
        }
                }
      }
      return $resultado;
}


function validarRegistracion($datos){
  $datos["perfil"] = $_FILES["perfil"]; 
  $errores = [];
  $archivo = "../json/usuarios.json";
  //validar si el mail ya existe
  if (datoPreexistente($datos, $archivo, $datos["email"]) == " ") {
      $errores = [];
    }
    else {
      $errores[] = "<p>Mail ya existente</p>";
    } 
  // validar si el usuario ya existe
  if (datoPreexistente($datos, $archivo, $datos["usuario"]) == " ") {
      $errores = [];
    }
  else {
      $errores[] = "<p>Usuario ya existente</p>";
    }  
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

function validarLogin($datos, $archivo){
    // $dato = $_POST["usuario"];
    $usuarios_json = file_get_contents($archivo);
    $usuarios = json_decode($usuarios_json, true);
    $resultado = [];
    foreach ($usuarios as $arrayUsuario) {
     foreach ($arrayUsuario as $usuario => $valor) {
     if ($datos["usuario"] == $valor) {
       $resultado = $arrayUsuario;
       return $resultado;
     }
     else {
         $resultado = NULL;
     }
    }
   }
   return $resultado;
  }







?>


