<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Carrito extends Model
{
    public $table = 'carrito';
    public $fillable = [];

    public function producto()
    {
        return $this->hasOne('App\Producto', 'id', 'id_producto');
    }

    // public function cantidadDeProductos($carrito){
    //     $total = 0;
    //     foreach ($carrito as $indice=>$producto) {
    //         $total += $producto["cantidad"];
    //     }
    //     return $total;
    // }
    public function precioTotal($losProductosDelCarrito){
        $total = 0;
        foreach ($losProductosDelCarrito as $key => $carrito) {
            $total += $carrito->producto->precio * $carrito['cantidad'];
        }
        return $total;
    }
    
}
