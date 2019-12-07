<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $fillable = [];

    public function user(){
        return $this->belongsToMany(User::class, 'carrito', 'id_producto', 'id_cliente');
    }

}
