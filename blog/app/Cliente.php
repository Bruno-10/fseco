<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = "cliente";
    public $id = "id_cliente";
    public $timestamps = false;
    public $fillable = [];


    public function producto(){
        return $this->belongsToMany(Producto::class, 'carrito', 'id:cliente', 'id_prod');
    }


}
