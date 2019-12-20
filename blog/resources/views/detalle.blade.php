@extends('layouts.layout')

@section('titulo')
    Detalle
@endsection

@section('principal')
<body>
        <main>
          <div class="card detalleCard row col-lg-12 col-md-12 col-sm-12">
           <br>
            <div class="card__body row col-sm-12 col-lg-12 col-md-12">
              <div class="half col-sm-10 col-md-8">
                <div class="featured_text">
                  <h1>{{$producto->titulo}}</h1>
                  <br>
                  <p class="price"> $ {{$producto->precio}}</p>
                </div>
                <div class="image">
                  <img src="/storage/{{ $producto->img}}" alt="">
                </div>
              </div>
              <div class="half col-sm-4 col-md-4">
                <div class="description">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatem nam pariatur voluptate perferendis, asperiores aspernatur! Porro similique consequatur, nobis soluta minima, quasi laboriosam hic cupiditate perferendis esse numquam magni.</p>
                </div>
                @if ($producto->cantidad > 0) 
                <span class="stock"><i class="fa fa-pen"></i>{{$producto->cantidad}} restantes! </span>
                @else 
                <span class="stock"><i class="fa fa-pen"></i> Agotado </span>
                @endif
              </div>
            </div>
            <div class="card__footer row col-md-12">
              <div class="recommend">
                <p>Producto comendado por</p>
                <h3>Fernando Belasteguín</h3>
            </div>
            @if(Auth::check())
            <form action="/carrito" method="post">
                @csrf
                <input type="hidden" value='{{$producto->id}}' name="id">
                <input type="submit" value="Agregar al Carrito">  
            </form> 
            @else
            <p class="col-sm-12 col-md-4">Debes estar logeado para agregar este producto al carrito. </p>
            <h4 class="col-sm-12 col-md-4"><a href="/login">¿Deseas logearte?</a></h4>
            @endif

            </div>
          </div>
        </main>
      </body>
@endsection