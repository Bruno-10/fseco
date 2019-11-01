<?php 
    class Producto{
        protected $id;
        protected $titulo;   
        protected $descripcion;
        protected $precio;
        protected $cantidad;
        protected $imgProducto;
    
        public function __construct($id,$titulo,$descripcion,$precio,$cantidad,$imgProducto){
            $this->id = $id;
            $this->titulo = $titulo;  
            $this->descripcion = $descripcion;
            $this->precio = $precio;
            $this->cantidad = $cantidad;
            $this->imgProducto = $imgProducto;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }

        /**
         * Get the value of cantidad
         */ 
        public function getCantidad()
        {
                return $this->cantidad;
        }

        /**
         * Set the value of cantidad
         *
         * @return  self
         */ 
        public function setCantidad($cantidad)
        {
                $this->cantidad = $cantidad;

                return $this;
        }

        /**
         * Get the value of imgProducto
         */ 
        public function getImgProducto()
        {
                return $this->imgProducto;
        }

        /**
         * Set the value of imgProducto
         *
         * @return  self
         */ 
        public function setImgProducto($imgProducto)
        {
                $this->imgProducto = $imgProducto;

                return $this;
        }
    }
?>  