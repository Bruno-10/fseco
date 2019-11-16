<?php
  /* function validarLogin($datos, $tabla){
    $errores = [];
    $usuario = $datos["usuario"];
    $pass = $datos["password"];
    $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
    $query = $db->prepare("SELECT * FROM $tabla WHERE nom_usuario = :usuario");
    $query->bindValue(':usuario',$usuario);
    // $query->bindValue(':pass',$pass);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC); 
    if(password_verify($pass, $resultado["password"]) ){
      return $resultado;
    }
  } */

require_once("../../funciones/function.php");
$id = $_GET["id"];

$producto = traerProductoID($id); 
if ($producto["categoria"] == 1){
  $categoria = "Paleta";
} elseif ($producto["categoria"] == 2) {
  $categoria = "Indumentaria";
} elseif ($producto["categoria"] == 3) {
  $categoria = "Accesorios";
} elseif ($producto["categoria"] == 4) {
  $categoria = "Paleteros/mochilas";
} elseif ($producto["categoria"] == 5) {
  $categoria = "Pelotas";
} else {
  $categoria = "";
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
    <link rel="stylesheet" href="../../css/admin-producto.css">
    <link rel="stylesheet" href="../../css/procesar-modificar.css">
    <link rel="stylesheet" href="../../css/footer1.css">
    <title>Modificar Producto</title>
</head>
    <body>
    <div class="container-fluid padding">
    <?php require_once("header-admin.php");?>
         <div class="producto">
         <div><h2>Modificar producto</h2></div>
              <form action="procesar-modificar.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="contenedor">
                  <div class="rectangulos">
                    <input type="hidden" name="id" value="<?= $producto["id_prod"]?>">
                    <label for="titulo">Titulo</label>
                    <br>
                    <input type="text" name="titulo" id="titulo" value="<?= $producto["titulo"]?>">
                  </div>
                  <div class="rectangulos">
                    <label for="precio">Precio</label>
                    <br>
                    <input type="text" name="precio" id="precio" value="<?= $producto["precio"]?>">
                  </div>
                  <br>
                  <div class="rectangulos">
                    <label for="img">Imagen</label>
                    <br>
                    <input type="text" name="img" id="img" value="">
                  </div >
                  <div class="rectangulos">
                    <label for="cat">Categoria</label>
                    <br>
                    <input type="text" name="cat" id="cat" value="<?= $categoria?>">
                  </div>
                </div>
                <br>
                <div class="descripcion">
                  <label for="descripcion">Descripcion</label>
                  <br>
                  <input type="textarea" name="descripcion" id="descripcion" value="<?= $producto["descripcion"]?>">
                </div>
                <div>
                <button class="btn btn-success" type="submit">Enviar</button>
                </div>
              </form>
         </div>
    </div>
    <?php require_once("../../recursos/footer.php"); ?>
  
</body>
</html>