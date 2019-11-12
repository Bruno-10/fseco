<?php 

class Usuario{
    public $nombre;
    public $apellido;   
    public $imgPerfil;
    public $password;
    public $rpassword;
    public $nombreUsuario;
    public $email;
    public $carrito;

    public function __construct($nombre,$apellido,$imgPerfil,$password,$rpassword,$nombreUsuario,$email){
        $this->nombre = $nombre;
        $this->apellido = $apellido;  
        $this->imgPerfil = $imgPerfil;
        $this->password = $password;
        $this->rpassword = $rpassword;
        $this->nombreUsuario = $nombreUsuario;
        $this->email = $email;
    }
    public function datoPreexistente($archivo, $que, $select){
              // $que es el dato a verificar
              $query = $archivo->prepare("SELECT $select FROM cliente ");
              $query -> execute();
              $usuarios = $query->fetchAll(PDO::FETCH_ASSOC); 
              $resultado = "";             
              foreach ($usuarios as $arrayUsuario) {
                      foreach ($arrayUsuario as $usuario => $valor) {
                              if ($que == $valor) {
                                  $resultado = $arrayUsuario;
                                  return $resultado;
                              }
              else {
                  return $resultado;
              }
                      }
            }   
      }


    public function validarRegistracion(){
         
        $errores = [];
        $archivo = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
        //validar si el mail ya existe
        if ($this->datoPreexistente($archivo, $this->email, "email") == "") {
<<<<<<< HEAD
            $errores ["mail"]= [];
=======
            $errores["mail"] = [];
>>>>>>> 4fcf943f8939ed6e5a4cf77e7a7e0f89121c49a2
          }
         else{
            $errores["mail"] = "<p>Mail ya existente</p>";
          }
        // validar si el usuario ya existe
        if ($this->datoPreexistente($archivo, $this->nombreUsuario, "nom_usuario") == "") {
            $errores ["usuario"] = [];
          }
        else {
            $errores["usuario"] = "<p>Usuario ya existente</p>";
          }  
        //validar password//
        if (($this->password == "") && ($this->password == "")) {
          $errores ["pass"]= "<p>*Los dos campos de contraseña estan vacios</p>";
        } 
        if ($this->password == "") { 
          $errores ["contrasenia"] = "<p>*La contraseña esta vacia</p>";
        } else if ($this->password == "") {
          $errores ["confirmacion"] = "<p>*Falta la confirmacion de contraseña</p>";
        } else if ($this->password != $this->password) {
          $errores ["verificacion"]= "<p>*Las contraseñas no verifican</p>";
        } 
        //validar registro
        if (strlen($this->nombre) == 0){
          $errores ["nombre"] =  "<p>*No llenaste el Nombre <br></p>";
        }
        if (strlen($this->apellido) == 0){
          $errores ["apellido"] = "<p>*No llenaste el Apellido <br></p>";
        }
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == false) {
          $errores ["valido"] = "<p>*El email ingresado no es valido <br></p>";
        }
        if ((strlen($this->nombreUsuario) < 8)){
          $errores ["caracteres"] = "<p>*El usuario debe tener mas de 8 caracteres <br></p>";
        }
        //validar imagen //
        if ($this->imgPerfil["error"] != 0){
            $errores ["img"] = "<P>*Hubo error al cargar la imagen</p>";
         } else {
           $ext = pathinfo($this->imgPerfil["name"], PATHINFO_EXTENSION);
           if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
             $errores ["imagen"] = "<p>*La imagen debe ser jpg, jpeg o png </p>";
           } 
         }  
         return $errores;
      }   

      









    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of imgPerfil
     */ 
     public function getImgPerfil()
    {
        return $this->imgPerfil;
    }
 
    /**
     * Set the value of imgPerfil
     *
     * @return  self
     */ 
     public function setImgPerfil($imgPerfil)
    {
        $this->imgPerfil = $imgPerfil;

        return $this;
    } 

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of carrito
     */ 
    public function getCarrito()
    {
        return $this->carrito;
    }

    /**
     * Set the value of carrito
     *
     * @return  self
     */ 
    public function setCarrito($carrito)
    {
        $this->carrito = $carrito;

        return $this;
    }
        /**
     * Get the value of rpassword
     */ 
    public function getRpassword()
    {
        return $this->rpassword;
    }

    /**
     * Set the value of rpassword
     *
     * @return  self
     */ 
    public function setRpassword($rpassword)
    {
        $this->rpassword = $rpassword;

        return $this;
    }
    
    public function registrarse(){
        return true;
    }
    public function inciarsesion(){
        return true;
    }
    public function cerrarSesion(){
        return true;
    }
    
    public function editarPerfil(){
        return true;
    }
    
}
?>