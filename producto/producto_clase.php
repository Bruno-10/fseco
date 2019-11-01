<?php 
    class Producto{
        protected $id;
        protected $titulo;   
        protected $descripcion;
        protected $precio;
        protected $cantidad;
    
        public function __construct($id,$titulo,$descripcion,$precio,$cantidad){
            $this->id = $id;
            $this->titulo = $titulo;  
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $this->cantidad = $cantidad;
        }
    }
?>  