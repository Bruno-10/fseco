<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function index() {
        $usuario = Auth::user();
        return view("usuario", compact('usuario'));
    }

    public function mostrar($id){
        if (Auth::user()) {
            $usuarioId = Auth::user()->id;
        $resultado = Auth::user();

        $losProductos = $resultado->producto; 

        return view('usuario.carrito', compact('losProductos'));
        } else {
            return view('auth.login');
        }

    }
}
