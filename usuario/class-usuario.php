<?php 

class Usuario{
    protected $nombre;
    protected $apellido;   
    protected $imgPerfil;
    protected $password;
    protected $rpassword;
    protected $nombreUsuario;
    protected $email;
    protected $carrito;

    public function __construct($nombre,$apellido,$imgPerfil,$password,$rpassword,$nombreUsuario,$email){
        $this->nombre = $nombre;
        $this->apellido = $apellido;  
        $this->imgPerfil = $imgPerfil;
        $this->password = $password;
        $this->rpassword = $rpassword;
        $this->nombreUsuario = $nombreUsuario;
        $this->email = $email;
    }
    private function datoPreexistente($archivo, $que){
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
                  $resultado = "";
              }
                      }
            }
            return $resultado;
      }


    public function validarRegistracion(){
         
        $errores = [];
        $archivo = "../json/usuarios.json";
        //validar si el mail ya existe
        if ($this->datoPreexistente($archivo, $this->email) == "") {
            $errores = [];
          }
          else {
            $errores[] = "<p>Mail ya existente</p>";
          } 
        // validar si el usuario ya existe
        if ($this->datoPreexistente($archivo, $this->nombreUsuario) == "") {
            $errores = [];
          }
        else {
            $errores[] = "<p>Usuario ya existente</p>";
          }  
        //validar password//
        if (($this->password == "") && ($this->password == "")) {
          $errores []= "<p>*Los dos campos de contraseña estan vacios</p>";
        } else if ($this->password == "") { 
          $errores []= "<p>La contraseña esta vacia</p>";
        } else if ($this->password == "") {
          $errores [] = "<p>*Falta la confirmacion de contraseña</p>";
        } else if ($this->password != $this->password) {
          $errores []= "<p>*Las contraseñas no verifican</p>";
        } 
        //validar registro
        if (strlen($this->nombre) == 0){
          $errores [] =  "<p>*No llenaste el Nombre <br></p>";
        }
        if (strlen($this->apellido) == 0){
          $errores [] = "<p>*No llenaste el Apellido <br></p>";
        }
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) == false) {
          $errores [] = "<p>*El email ingresado no es valido <br></p>";
        }
        if ((strlen($this->nombreUsuario) < 8)){
          $errores [] = "<p>*El usuario debe tener mas de 8 caracteres <br></p>";
        }
        //validar imagen //
        if ($this->imgPerfil["error"] != 0){
            $errores [] = "<P>*Hubo error al cargar la imagen</p>";
         } else {
           $ext = pathinfo($this->imgPerfil["name"], PATHINFO_EXTENSION);
           if ($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
             $errores [] = "<p>*La imagen debe ser jpg, jpeg o png </p>";
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