<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;


class ProductoController extends Controller
{
    public function listado()
    {   
        $productos = Producto::all();
        return view('usuario.listado', compact ('productos'));
    }
    public function detalle(Request $req)
    {
        $id = $req["id"];
        
        $producto= Producto::find($id);

        return view('detalle', compact('producto'));
    }
    public function filtroCategorias($categoria)
    {
        if ($categoria === 'paletas'){
            $id = 1;
            $productos= Producto::where('categoria',"=", $id)->get();
            return view('usuario.listado', compact('productos'));
        }  
        if ($categoria === 'indumentaria'){
            $id = 2;
            $productos= Producto::where('categoria',"=", $id)->get();
            return view('usuario.listado', compact('productos'));
        } 
        if ($categoria === 'accesorios'){
            $id = 3;
            $productos= Producto::where('categoria',"=", $id)->get();
            return view('usuario.listado', compact('productos'));
        } 
        if ($categoria === 'paleteros'){
            $id = 4;
            $productos= Producto::where('categoria',"=", $id)->get();
            return view('usuario.listado', compact('productos'));
        } 
        if ($categoria === 'pelotas'){
            $id = 5;
            $productos= Producto::where('categoria',"=", $id)->get();
            return view('usuario.listado', compact('productos'));
        } 
    }

    public function agregar($id){
        if (Auth::user()) {
            $carrito = new Carrito;
        $producto= Producto::find($id);
        $usuarioId = Auth::user()->id;

        $carrito->id_producto = $producto['id'];
        $carrito->id_cliente = $usuarioId;
        $carrito->precio_unitario = $producto['precio'];
        $carrito->cantidad = 1;

        $carrito->save();

        $resultado = User::find($usuarioId);


        $losProductos = $resultado->producto;   

        return view('usuario.carrito', compact('losProductos'));
        } else {
            return view('auth.login');
        }
    }
}
