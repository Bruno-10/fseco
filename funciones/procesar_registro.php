<?php 
     session_start();
     require_once("../usuario/class-usuario.php");
     require_once("../usuario/class-cliente.php");
     require_once("../usuario/class-administrador.php");

    if ($_POST["nombreUsuario"] == "administrador"){
        $clase = 'administrador';
    }
    else {
        $clase = 'cliente';
    }
     $imgPerfil = $_FILES["perfil"];
    $cliente = new $clase ($_POST["nombre"],
        $_POST["apellido"],
        $imgPerfil,
        password_hash($_POST["password"], PASSWORD_DEFAULT),
        password_hash($_POST["rpassword"], PASSWORD_DEFAULT),
        $_POST["nombreUsuario"],
        $_POST["email"], )  ;
        $errores = $cliente->validarRegistracion();
        $resultado = [];
        if (empty($errores)) {
            $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
            $imagenBD = addslashes(file_get_contents($cliente->imgPerfil["tmp_name"]));
            $query = $db->prepare("INSERT INTO $clase (nombre, apellido, img_perfil, password, rpassword, nom_usuario,email) VALUES ('$cliente->nombre','$cliente->apellido','$imagenBD','$cliente->password','$cliente->rpassword','$cliente->nombreUsuario','$cliente->email')");
            $query->execute();
            $_SESSION["usuario"] = $cliente;
            header("location:../usuario/usuario.php ");
        }  else{
            $_SESSION["errores"] = $errores;
            header("location:../usuario/registro.php ");
        } 
       
           
        
    
    
    

?>