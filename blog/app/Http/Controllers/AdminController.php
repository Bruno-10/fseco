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
        $productos = Producto::all();
        return view('productos-admin', compact ('productos'));
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

    public function eliminarProducto($id){
        $post = Producto::find($id);
        $post->delete();
    
        return redirect("productos-admin");

    }
}
