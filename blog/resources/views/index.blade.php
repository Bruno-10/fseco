@extends('layouts.layout')

@section('titulo')
     Padel Sport
@endsection

@section('links')
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
@endsection

@section('principal')

<main class="row col-sm-12 col-md-12 col-lg-12  margencero main">

    @if (\Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'OK...',
                text: '{!! \Session::get('success') !!}',
                footer: '<a href>Why do I have this issue?</a>'
            })
        </script>
@endif
    <div class='col-sm-12 col-md-8 col-lg-10 caja_derecha margencero'>
        @foreach ($productos1 as $producto) 
            <div class="caja_producto col-sm-12 col-md-3 col-lg-3">
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
        <section class="col-sm-10 col-md-10 col-lg-10 banner">
            <div><h4>  <i class="fa fa-credit-card"></i>HASTA 6 CUOTAS SIN INTERES </h4> </div>
            <div> <h4> <i class="fa fa-truck"></i> ENVIOS GRATIS </h4> </div>
            <div> <h4> <i class="fa fa-money-bill-alt"></i> 10% DE DESCUENTO </h4> </div>                       
    </section>
    @foreach ($productos2 as $producto) 
    <div class="caja_producto col-sm-12 col-md-3 col-lg-3">
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