<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

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
}
