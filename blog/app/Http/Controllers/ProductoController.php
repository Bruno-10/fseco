<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Caja;
use App\CajaCabecera;


class ProductoController extends Controller
{

    public function pagPrincipal(){
        $productos1 = Producto::take(3)->get();
        $productos2 = Producto::take(3)->skip(3)->get();
        return view('index', compact('productos1', 'productos2'));
    }

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
                        
                        return view('usuario.carrito', compact('losProductosDelCarrito','losProductos',"resultado"));
                    } 
            }
            else{
                $producto = new Carrito;
                $producto->id_producto = $id;
                $producto->id_cliente = $usuarioId;
                $producto->cantidad = 1;
                $producto->save();
                $losProductosDelCarrito = $carrito->all();
                $resultado = [];

                foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
                    $resultado[] = $productoDelCarrito["id_producto"];
                }
                $losProductos = [];
                foreach($resultado as $idProducto){
                    $losProductos[] = Producto::find($idProducto);
                    
                }
            return view('usuario.carrito', compact('losProductosDelCarrito','losProductos',"resultado"));
            }
                
        }
        

        else(redirect('/producto'));           
    }
    
    public function bajarCantidad($id){
        $usuarioId = Auth::user()->id;
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
        $producto = $carrito->firstWhere('id_producto', $id);
        if($producto["cantidad"] > 0){
            $producto->cantidad -= 1;
            $producto->save();
            
        }
        else{
            $producto->delete();
        }
        
        return redirect("usuarioCarrito");
    }

    public function subirCantidad($id){
        $usuarioId = Auth::user()->id;
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
        $producto = $carrito->firstWhere('id_producto', $id);
        if($producto["cantidad"] > 0){
            $producto->cantidad += 1;
            $producto->save();   
        }
        
        return redirect("usuarioCarrito");
    }

    public function eliminar($id){
        $usuarioId = Auth::user()->id;
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
        $producto = $carrito->firstWhere('id_producto', $id);
        $producto->delete();
        
        return redirect("usuarioCarrito");
    }

    public function caja(){
        $usuarioId = Auth::user()->id;
        
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
        
        $losProductosDelCarrito = $carrito->all();
        

        $resultado = [];
        $losProductos = [];
                        
        foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
            $resultado[] = $productoDelCarrito["id_producto"];
            
        }
        foreach($resultado as $idProducto){
            
            $losProductos[] = Producto::find($idProducto);
            
            
        }
        return view('usuario.caja', compact('losProductosDelCarrito','losProductos',"resultado"));

    }

    public function checkout(Request $req)
    {          
        $this->validate($req, 
        [
            "firstName" => "required|max:50|min:0",
            "lastName" => "required|max:50|min:0",
            "email" => "required|email|min:0",
            "address" => "required|min:0",
            "country" => "required",
            "state" => "required",
            "zip" => "required|integer|min:3",
        ],
        [
            'required' => 'El campo :attribute es obligatorio',
            'email' => 'El campo :attribute debe ser un email valido',
            'min' => 'El campo Codigo Postal debe tener :min caracteres como minimo',
            'max' => 'El campo :attribute debe tener :max caracteres como maximo',
            'integer' => 'El campo :attribute deber ser un numero entero'
            
            ]
        );
        $productos = explode(',', $req['productos']);        
        $cajaCabecera = new CajaCabecera;
        
        $cajaCabecera->nombre = $req['firstName'];
        $cajaCabecera->apellido = $req['lastName'];
        $cajaCabecera->email = $req['email'];
        $cajaCabecera->direccion = $req['address'];
        if ($req['address2'] != null) {
            $cajaCabecera->direccion2 = $req['address2'];
        }
        $cajaCabecera->pais = $req['country'];
        $cajaCabecera->provincia = $req['state'];
        $cajaCabecera->cPostal = $req['zip'];

        $cajaCabecera->save();

       foreach ($productos as $value) {
        $carrito = Carrito::where('id_producto', '=', $value)->get(); 
        $cantidad = $carrito[0]->cantidad;
        
        $caja = new Caja;
        $caja->id_cabecera = $cajaCabecera->id;
        $caja->idProductos = $value;
        $caja->cantidad = $cantidad;

        $caja->save();
       }

        
        $usuarioId = Auth::user()->id;        
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();        
        foreach ($productos as $idProducto) {
        $productoBD = Producto::find($idProducto);
        $producto = $carrito->firstWhere('id_producto', $idProducto);
        $productoBD->cantidad -= $producto["cantidad"];
        $productoBD->save();
        $producto->delete(); 
        }

        return redirect('/')->with('success', 'your message,here');
    }
}

