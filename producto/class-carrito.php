<?php 
    class Carrito{
        protected $productos;
        protected $imgProducto;   
        protected $precio;
        protected $cantidad;
        protected $subTotal;
        protected $precioEnvio;
        protected $total;
    
        public function __construct($productos,$imgProducto,$precio,$cantidad,$subTotal, $precioEnvio, $total){
            $this->productos = $productos;
            $this->imgProducto = $imgProducto;  
            $this->precio = $precio;
            $this->cantidad = $cantidad;
            $this->subTotal = $subTotal;
            $this->precioEnvio = $precioEnvio;
            $this->total = $total;
        }
        

        /**
         * Get the value of productos
         */ 
        public function getProductos()
        {
                return $this->productos;
        }

        /**
         * Set the value of productos
         *
         * @return  self
         */ 
        public function setProductos($productos)
        {
                $this->productos = $productos;

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
         * Get the value of subTotal
         */ 
        public function getSubTotal()
        {
                return $this->subTotal;
        }

        /**
         * Set the value of subTotal
         *
         * @return  self
         */ 
        public function setSubTotal($subTotal)
        {
                $this->subTotal = $subTotal;

                return $this;
        }

        /**
         * Get the value of precioEnvio
         */ 
        public function getPrecioEnvio()
        {
                return $this->precioEnvio;
        }

        /**
         * Set the value of precioEnvio
         *
         * @return  self
         */ 
        public function setPrecioEnvio($precioEnvio)
        {
                $this->precioEnvio = $precioEnvio;

                return $this;
        }

        /**
         * Get the value of total
         */ 
        public function getTotal()
        {
                return $this->total;
        }

        /**
         * Set the value of total
         *
         * @return  self
         */ 
        public function setTotal($total)
        {
                $this->total = $total;

                return $this;
        }

        public function calcularSubtotal (){
            
        }
        public function calcularTotal (){
            
        }
        
        
    }
?>  