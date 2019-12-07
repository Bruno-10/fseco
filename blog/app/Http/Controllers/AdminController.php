<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Helper;

//Agregar Helper::esAdmin a todos los metodos para validacion de administradores

class AdminController extends Controller
{
    
    public function index()
    {
        if (Helper::noEsAdmin()){
            return redirect("/");
        }
        
        return view('admin.admin'); 
    }

    public function productos()
    {   
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $productos = Producto::all();
        return view('admin.productos-admin', compact ('productos'));
    }

    public function mostrarAgregar()
    {
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
        return view('admin.agregarProductos-admin');
    }



    public function agregarProducto(Request $req)
    {
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
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

        return redirect("admin.productos-admin");
    }

    public function formularioModificarProducto($id){
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $producto= Producto::find($id);

        return view('admin.modificar', compact('producto'));
    }

    public function modificarProducto(Request $req)
    {
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
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
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $post = Producto::find($id);
        $post->delete();
    
        return redirect("productos-admin");

    }


    public function clientes(){
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $clientes = User::all();


        return view('admin.clientes-admin', compact('clientes'));
    }

    public function clientesEliminar($id){
         if (Helper::noEsAdmin()){
            return redirect("/");
        }
        $cliente = User::find($id);


        $cliente->delete();
    
        return redirect("/clientes-admin");

    }

//Cierre controlador
}


