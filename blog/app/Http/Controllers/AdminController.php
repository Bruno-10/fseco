<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;

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

    public function formularioModificarProducto($id){
        $producto= Producto::find($id);

        return view('modificar', compact('producto'));
    }

    public function modificarProducto(Request $req)
    {
        //Traigo el producto que quiero modificar
        $id = $req["id"];
        
        $producto= Producto::find($id);
    
        
        //Ingreso nuevos datos

        $producto->titulo = $req["titulo"];
        $producto->descripcion = $req["descripcion"];
        $producto->precio = $req["precio"];
        $producto->cantidad = $req["cantidad"];
        $producto->categoria = $req["categoria"];

        //Compruebo si la imagen fue cambiada y la guardo
        if($req->img){
            
            $ruta = $req->file("img")->store("public");
            
            $nombreArchivo = basename($ruta);

            $producto->img = $nombreArchivo;

        }
        
        $producto -> save();
        return redirect("/productos-admin");
    }




    public function eliminarProducto($id){
        $post = Producto::find($id);
        $post->delete();
    
        return redirect("productos-admin");

    }


    public function clientes(){
        $clientes = User::all();


        return view('clientes-admin', compact('clientes'));
    }

    public function clientesEliminar($id){
        $cliente = User::find($id);


        $cliente->delete();
    
        return redirect("/clientes-admin");

    }

//Cierre controlador
}


