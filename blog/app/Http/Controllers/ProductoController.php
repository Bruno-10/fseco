<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Carrito;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Caja;
use App\CajaCabecera;
use Illuminate\Support\Arr;

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
            $id = $req["id"];
            $usuarioId = Auth::user()->id;
            $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
            $carritos = (array) $carrito;
            $losProductosDelCarrito = Arr::flatten((array) $carritos);
            $cantidadTotalDeProductos = $carrito->sum('cantidad');

            if($carrito->isNotEmpty()){
                $producto = $carrito->firstWhere('id_producto', $id);
                if(is_null($producto)){
                    $producto = new Carrito;
                    $producto->id_producto = $id;
                    $producto->id_cliente = $usuarioId;
                    $producto->cantidad = 1;
                    $producto->save();
                    $losProductosDelCarrito = Arr::flatten((array) $carritos);  
                    $resultado = [];
                    foreach($losProductosDelCarrito as $key=>$productoDelCarrito){
                        $resultado[] = $productoDelCarrito["id_producto"];

                    return view('usuario.carrito', compact('losProductosDelCarrito',"resultado"));
                    }}
                    else{
                        $producto->id_producto = $id;
                        $producto->id_cliente = $usuarioId;
                        $producto->cantidad += 1;
                        $producto->save();
                        $resultado = [];
                        foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
                            $resultado[] = $productoDelCarrito["id_producto"]; 
                        }
                        return view('usuario.carrito', compact('losProductosDelCarrito',"resultado"));    
                    } 
                    
            }
            
            else{
                $producto = new Carrito;
                $producto->id_producto = $id;
                $producto->id_cliente = $usuarioId;
                $producto->cantidad = 1;
                $producto->save();
                $resultado = [];

                foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
                    $resultado[] = $productoDelCarrito["id_producto"];
                }
            return view('usuario.carrito', compact('losProductosDelCarrito',"resultado"));
            }
                
        }
        

        else(redirect('/producto'));           
    }
    
    public function bajarCantidad($id){
        $usuarioId = Auth::user()->id;
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
        $productoABajar = $carrito->firstWhere('id_producto', $id);
        if($productoABajar["cantidad"] > 0){
            $productoABajar->cantidad -= 1;
            $productoABajar->save();
            
        }
        else{
            $productoABajar->delete();
        }
        
        return redirect("usuarioCarrito");
    }

    public function subirCantidad($id){
        $usuarioId = Auth::user()->id;
        $carrito = Carrito::where('id_cliente', '=', $usuarioId)->get();
        $productoASumar = $carrito->firstWhere('id_producto', $id);
        if($productoASumar  ["cantidad"] > 0){
            $productoASumar ->cantidad += 1;
            $productoASumar ->save();   
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
        $carritos = (array) $carrito;
        $losProductosDelCarrito = Arr::flatten((array) $carritos);
        $cantidadTotalDeProductos = $carrito->sum('cantidad');
        $instanciaParaElPrecio = new Carrito;
        $precioTotal = $instanciaParaElPrecio->precioTotal($losProductosDelCarrito);
        
        $resultado = [];
                        
        foreach($losProductosDelCarrito as $id=>$productoDelCarrito){
            $resultado[] = $productoDelCarrito["id_producto"];
        }

        return view('usuario.caja', compact(
            'carritos',
            'precioTotal',
            'cantidadTotalDeProductos',
            'losProductosDelCarrito',
            'resultado',

        ));
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

