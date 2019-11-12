<?php
function validarLogin($datos, $tabla){
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
}
?>