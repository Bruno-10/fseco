<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Carrito;
use Illuminate\Support\Facades\Auth;

class Producto extends Model
{
    public $table = "productos";
    public $fillable = [];

    public function user(){
        return $this->belongsToMany(User::class, 'carrito', 'id_producto', 'id_cliente');
    }
    // public function todosLosProductos(){
    //     $usuarioId = Auth::user()->id;
    //     $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
    //     for ($carrito as productos){
    //     $carrito-all()->id();}
    //     return $idProductos;
    // }
        
    
    // return view('usuario.listado', compact ('productos'));

}
