<?php 
     session_start();
     require_once("../usuario/class-usuario.php");
     require_once("../usuario/class-cliente.php");
    $cliente = new cliente ($_POST["nombre"],
        $_POST["apellido"],
        $_FILES["perfil"],
        password_hash($_POST["password"], PASSWORD_DEFAULT),
        $_POST["rpassword"],
        $_POST["nombreUsuario"],
        $_POST["email"], )  ;
        $errores = $cliente->validarRegistracion();
        $resultado = [];
        if (empty($errores)) {
            $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
            $query = $db->prepare("INSERT INTO cliente (nombre, apellido, img_perfil, password, rpassword, nom_usuario,email) VALUES ('$cliente->nombre','$cliente->apellido','$cliente->nombre','$cliente->password','$cliente->rpassword','$cliente->nombreUsuario','$cliente->email')");
            $query->execute();
            $_SESSION["usuario"] = $cliente;
            var_dump($_SESSION["usuario"]);
        }  else{
            $_SESSION["errores"] = $errores;
            $_SESSION["usuario"] = $cliente;
            header("location:../usuario/registro.php ");
        } 
       
           
        
    
    
    

?>