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

    public function agregar(request $req){
        if (Auth::user()) {
            $usuarioId = Auth::user()->id;
            $id = $req["id"];
            $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
           
            if($carrito->isNotEmpty()){
                $producto = $carrito->firstWhere('id_producto', $id);
                dd($producto->producto);
                //
                if(is_null($producto)){
                    $carrito->id_producto = $id;
                    $carrito->id_cliente = $usuarioId;
                    $carrito->precio_unitario = $producto->producto->precio;
                    $carrito->cantidad = 1;
                    $carrito->save();
                    
                    return view('usuario.carrito', compact('losProductos'));
                    // }    
                    
                    
                    
                
                    //else {
                    //     return view('auth.login');
            }

           // }
        //           $carrito->cantidad += 1;
        //           $carrito->save(); 
           // }
        }
        
        // $producto= Producto::find($id); 
       
        
    }
}

    public function eliminar($id){
        $producto = Carrito::find($id);
        $producto->delete();
        return view("---------");      
    }

    public function caja(){
        return view('usuario.caja');
    }


}

