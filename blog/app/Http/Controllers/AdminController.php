<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin'); 
    }

    public function productos()
    {
        return view('productos-admin');
    }

    public function mostrarAgregar()
    {
        return view('agregarProductos-admin');
    }



    public function agregarProducto(Request $req)
    {
        
        $producto = new Producto();

        $ruta = $req->file("imgProducto")->store("public");

        $nombreArchivo = basename($ruta);

        $producto->titulo = $req["titulo"];
        $producto->descripcion = $req["descripcion"];
        $producto->precio = $req["precio"];
        $producto->cantidad = $req["cantidad"];
        $producto->img =  $nombreArchivo;
        $producto->categoria = $req["categoria"];


        $producto->save();

        return redirect("productos-admin");
    }
}
