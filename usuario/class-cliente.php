<?php
require_once("class-usuario.php");
require_once("../producto/class-producto.php");

class cliente extends Usuario{

    public function comprar(){
        return true;
    }
    public function generarEmail(){
        return true;
    }
    public function agregarProductoCarrito($producto){
        return true;
    }
    public function removerProductoCarrito($producto){
        return true;   
    }
    public function modificarCantidad($producto){
        return true;
    }
}




?>