<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view("usuario.contacto");
    }
    public function detalle(){
        return view("detalle");
    }
}