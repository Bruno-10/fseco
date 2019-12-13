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
                //
                if(is_null($producto)){
                    $producto = new Carrito;
                    $producto->id_producto = $id;
                    $producto->id_cliente = $usuarioId;
                    $producto->cantidad = 1;
                    $producto->save();
                    $losProductosDelCarrito = $carrito->all();  
                    foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
                        $resultado = [];
                        $resultado[] = $productoDelCarrito["id_producto"];
                        
                    }
                    foreach($resultado as $idProducto){
                        $losProductos = [];
                        $losProductos[] = Producto::find($idProducto);
                        
                    }
                    }
                    else{
                        $producto->id_producto = $id;
                        $producto->id_cliente = $usuarioId;
                        $producto->cantidad += 1;
                        $producto->save();
                        $losProductosDelCarrito = $carrito->all();
                        $resultado = [];
                        $losProductos = [];
                        foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
                            $resultado[] = $productoDelCarrito["id_producto"];
                            
                        }
                        foreach($resultado as $idProducto){
                            
                            $losProductos[] = Producto::find($idProducto);
                            
                        }
                        
                        return view('usuario.carrito', compact('losProductos',"resultado"));
                    } 
            }
            else{
                $producto = new producto;
                $producto->id_producto = $id;
                $producto->id_cliente = $usuarioId;
                $producto->cantidad = 1;
                $producto->save();
                $losProductosDelCarrito = $carrito->all();
                        
                foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
                    $resultado = [];
                    $resultado[] = $productoDelCarrito["id_producto"];
                    
                }
                foreach($resultado as $idProducto){
                    $losProductos = [];
                    $losProductos[] = Producto::find($idProducto);
                    
                }
            }
                
        }
        

        else(redirect('/producto'));           
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

