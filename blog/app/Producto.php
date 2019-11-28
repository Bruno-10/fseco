<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "producto";
    public $id = "id_prod";
    public $timestamps = false;
    public $fillable = [];

    public function cliente(){
        return $this->belongsToMany(Cliente::class, 'carrito', 'id_prod', 'id:cliente');
    }

}
