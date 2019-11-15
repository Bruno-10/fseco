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
function validarLogin($datos, $tabla){
  $errores = [];
  $usuario = $datos["usuario"];
  $pass = $datos["password"];
  $db = conectarseBD();
  $query = $db->prepare("SELECT * FROM $tabla WHERE nom_usuario = :usuario");
  $query->bindValue(':usuario',$usuario);
  // $query->bindValue(':pass',$pass);
  $query->execute();
  $resultado = $query->fetch(PDO::FETCH_ASSOC); 
  if(password_verify($pass, $resultado["password"]) ){
    return $resultado;
  }
}

function listarProductos(){
  $db = conectarseBD();
  $query = $db->prepare("SELECT * FROM `producto`");
  $query -> execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}
function listarProductosPorCategoria($categoria){
  $db = conectarseBD();
  $query = $db->prepare("SELECT * FROM `producto` WHERE categoria = '$categoria' ");
  $query -> execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

function traerCliente($email){
  $db = conectarseBD();
  $query = $db->prepare("SELECT nombre, img_perfil, nom_usuario, email FROM `cliente` WHERE email = '$email' ");
  $query -> execute();
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}




  function verificarErrores($key){
    $errores = "";
    if(isset($_SESSION[$key]) && $_SESSION[$key] != ""){
      $errores = $_SESSION[$key];
      $_SESSION[$key] = "";
      
  }
      return $errores;
  }
  function mostrarErrores($errores,$campo){
    if(isset($errores[$campo]) && ($errores != "")){
      /* foreach($errores as $error){       
        echo $error;    */    
        echo "<p>" . $errores[$campo] . "<p>";                   
    }
  } 
  // }

  function traerProductoID($id){
    $db = conectarseBD();
    $query = $db->prepare("SELECT * FROM `producto` WHERE id_prod = :id ");
    $query->bindValue(":id", $id);
    $query -> execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  function conectarseBD(){
      try {
        $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
      } catch (\Throwable $th) {
        $db = false;
      }
      return $db;
  }

  function traerIdProductos($cliente){
    $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
    $query = $db->prepare("SELECT id_produ FROM carrito WHERE id_cliente = $cliente");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;      
}
/* 
  function traerIdProductosJoin(){
    $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
    $query = $db->prepare
    ("SELECT * 
    FROM producto 
    INNER JOIN carrito ON productos.id_marca = marcas.id);
  } */



  function  eliminarProductoID($id){
    $db = conectarseBD();
    if ($db != false){
      $query = $db->prepare("DELETE FROM `producto` WHERE id_prod = :id ");
      $query->bindValue(":id", $id);
      $query -> execute();
      $result = "exito" ;
    } else {
      $result =  "hubo un error al eliminar el producto";
    }
    return $result;
  }

  function modificarProducto($dato){
    $db = conectarseBD();
    $titulo = $dato["titulo"];
    $precio = $dato["precio"];
    $categoria = $dato["cat"];
    $descripcion = $dato["descripcion"];
    if($db != false){
      $query = $db->prepare("UPDATE producto SET titulo= '$titulo', precio = '$precio', categoria = '$categoria', descripcion = '$descripcion' WHERE id_prod = :id");
      $query->bindValue(":id", $dato["id"]);
      $query -> execute();
      $result = "exito" ;
    } else {
      $result =  "hubo un error al eliminar el producto";
    }
    return $result;
    }
  
    



?>