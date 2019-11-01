<?php 
    class Envio{
        protected $nombre;
        protected $apellido;   
        protected $ciudad;
        protected $provincia;
        protected $codigoPostal;
        protected $direccion;
        protected $entreCalles;
        protected $numero;
        protected $piso;
        protected $telefono;

        public function __construct($nombre,$apellido,$ciudad,$provincia,$codigoPostal, $direccion,$entreCalles, $numero, $piso,$telefono){
            $this->nombre = $nombre;
            $this->apellido = $apellido;  
            $this->ciudad = $ciudad;
            $this->provincia = $provincia;
            $this->codidgoPostal = $codigoPostal;
            $this->direccion = $direccion;
            $this->entreCalles = $entreCalles;
            $this->numero = $numero;
            $this->piso = $piso;
            $this->telefono = $telefono;
        }
    }
?>