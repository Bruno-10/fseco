@extends('layouts.layout')

@section('titulo')
     Padel Sport
@endsection

@section('links')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('principal')
    <section>    
        <div class='carousel'>
            <div id="carouselExampleControls" class="carousel slide col-sm-12 col-md-8 col-lg-8" data-ride="carousel">
                <div class="carousel-inner col-sm-12 col-md-8 col-lg-8">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="/storage/Carrusel.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item ">
                    <img class="d-block w-100" src="/storage/Carrusel.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="/storage/Carrusel.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <main class="row col-sm-12 col-md-12 col-lg-12  margencero main">
            <div class='col-sm-12 col-md-8 col-lg-10 caja_derecha margencero'>
                @foreach ($productos1 as $producto) 
                    <div class="caja_producto col-sm-12 col-md-3 col-lg-3">
                        <br>
                            <div class="contenedor_imagen " >
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


    <main class="row col-sm-12 col-md-12 col-lg-12  margencero main">
    {{--  {!! \Session::get('success') !!} --}}
        @if (\Session::has('success'))
            <script>
                swal("Compra Realizada con Exito!", "Gracias por confiar en nosotros!", "success");
            </script>
        @endif
        <div class='col-sm-12 col-md-8 col-lg-10 caja_derecha margencero'>
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
        </section>
@endsection