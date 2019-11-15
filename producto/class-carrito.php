<?php 
    class Carrito{  
        protected $id_produ;
        protected $id_cliente;
        protected $precio_uni;
        protected $cantidad;
        
    
        public function __construct($id_produ,$id_cliente,$precio_uni, $cantidad){
            $this->id_produ = $id_produ;
            $this->id_cliente = $id_cliente;  
            $this->precio_uni = $precio_uni;
            $this->cantidad = $cantidad;
        }

        public function agregarACarrito(){ 
        $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
        $query = $db->prepare("INSERT INTO carrito (id_produ, id_cliente, precio_uni, cantidad) VALUES ('$this->id_produ','$this->id_cliente','$this->precio_uni', ' $this->cantidad')");
        $query->execute();
        echo "Se ha creado un nuevo carrito!";
        header("location: carrito.php");    
        }

        /**
         * Get the value of id_produ
         */ 
        public function getId_produ()
        {
                return $this->id_produ;
        }

        /**
         * Set the value of id_produ
         *
         * @return  self
         */ 
        public function setId_produ($id_produ)
        {
                $this->id_produ = $id_produ;

                return $this;
        }

        /**
         * Get the value of id_cliente
         */ 
        public function getId_cliente()
        {
                return $this->id_cliente;
        }

        /**
         * Set the value of id_cliente
         *
         * @return  self
         */ 
        public function setId_cliente($id_cliente)
        {
                $this->id_cliente = $id_cliente;

                return $this;
        }

        /**
         * Get the value of precio_uni
         */ 
        public function getPrecio_uni()
        {
                return $this->precio_uni;
        }

        /**
         * Set the value of precio_uni
         *
         * @return  self
         */ 
        public function setPrecio_uni($precio_uni)
        {
                $this->precio_uni = $precio_uni;

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


}


        
        

?>  