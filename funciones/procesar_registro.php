<?php 
     session_start();
     require_once("../usuario/class-usuario.php");
     require_once("../usuario/class-cliente.php");
     require_once("../usuario/class-administrador.php");
     require_once("function.php");
     

    if ($_POST["nombreUsuario"] == "administrador"){
        $clase = 'administrador';
    }
    else {
        $clase = 'cliente';
    }

        $imgPerfil = $_FILES["perfil"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $rpassword = password_hash($_POST["rpassword"], PASSWORD_DEFAULT);

        $cliente = new cliente ($_POST["nombre"], $_POST["apellido"], $imgPerfil, $password, $rpassword, $_POST["nombreUsuario"], $_POST["email"], null );
        
        $errores = $cliente->validarRegistracion();
        
        $resultado = [];

        $imagenBD = addslashes(file_get_contents($cliente->imgPerfil["tmp_name"]));
    

        
        if ($errores["mail"] == "" && $errores["usuario"] == "") {
            $_SESSION["usuario"] =  [
                "email" => $cliente->getEmail(),
            ];
            $db = conectarseBD();
            $imagenBD = addslashes(file_get_contents($cliente->imgPerfil["tmp_name"]));
            $query = $db->prepare("INSERT INTO $clase (nombre, apellido, img_perfil, password, rpassword, nom_usuario,email) VALUES ('$cliente->nombre','$cliente->apellido','$imagenBD','$cliente->password','$cliente->rpassword','$cliente->nombreUsuario','$cliente->email')");
            $query->execute();
            $_SESSION["usuario"] =  [
                "email" => $cliente->getEmail(),
            ];
            $usuariosDatos = traerCliente($_SESSION["usuario"]["mail"]);
            $_SESSION["usuario"] = $usuariosDatos;
            header("location:../usuario/usuario.php ");
        }  else{
            $_SESSION["errores"] = $errores;
            header("location:../usuario/registro.php ");
        } 
       
           
        
    
    
    

?>