<?php
    class Categoria{
        protected $id;
        protected $nombre;   
        
        public function __construct($id,$nombre){
            $this->id = $id;
            $this->titulo = $nombre;  
        }
    }

?>