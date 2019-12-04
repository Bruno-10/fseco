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



    public function modificarProducto(Request $req)
    {
        //Traigo el producto que quiero modificar
        $idProducto = $req["id"];

        
        

        //Ingreso nuevos datos

        $idProducto->titulo = $req["titulo"];
        $idProducto->descripcion = $req["descripcion"];
        $idProducto->precio = $req["precio"];
        $idProducto->cantidad = $req["cantidad"];
        $idProducto->categoria = $req["categoria"];

        //Compruebo si la imagen fue cambiada y la guardo
        if($req->img){
            $ruta = $req->file("imgProducto")->store("public");

            $nombreArchivo = basename($ruta);

            $idProducto->img = $nombreArchivo;

        }
        
        $idProducto -> save();
        return redirect("/peliculas");
    }


//Cierre controlador
}