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
    
}
