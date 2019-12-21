@extends('layouts.layout')

@section('titulo')
     Listado Productos
@endsection

@section('principal')
    <main class="row col-sm-12 col-md-12 col-lg-12   margencero main">
        <div class="categorias col-sm-12 col-md-4 col-lg-2 margencero">
            <div id='titulo_categoria'>
                <h5>Categorias</h5>
            </div>
            <div class="lista_cat">
                <div><a href="/producto/paletas">PALETAS</a> </div>
                <div><a href="/producto/indumentaria">INDUMENTARIA</a> </div>
                <div><a href="/producto/accesorios">ACCESORIOS</a></div>
                <div><a href="/producto/paleteros">PALETEROS, MOCHILAS, FUNDAS</a></div>
                <div><a href="/producto/pelotas">PELOTAS</a></div>
            </div>    
        </div>
        <div class='col-sm-12 col-md-8 col-lg-10 caja_derecha margencero'>
            @foreach ($productos as $producto) 
                <div class="caja_producto col-sm-12 col-md-4 col-lg-3">
                    <br>
                        <div class="contenedor_imagen" >
                                <img class="imagen22" src="/storage/{{ $producto->img}}" alt="">
                        </div>
                        <div class="h1_titulo">
                            <h1 >{{$producto->titulo}}</h1>
                        </div>
                        <div class="precio">
                            <p> $ {{$producto->precio}}</p>
                        </div>
                        <div>
                            @if ($producto->cantidad > 0) 
                                <span class="stock"><i class="fa fa-pen"></i>{{$producto->cantidad}} restantes! </span>
                            @else 
                                <span class="stock"><i class="fa fa-pen"></i> Agotado </span>
                            @endif
                        </div>
                        <div class='cuotas'>
                            <p>Hasta 12 cuotas</p>                         
                        </div>
                        <form class='boton_formu' action="detalle" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{$producto->id}}">
                            <Button type="submit" > Ver más </Button>
                        </form> 
                 
                </div>
            @endforeach 
        </div>        
    </main>
@endsection