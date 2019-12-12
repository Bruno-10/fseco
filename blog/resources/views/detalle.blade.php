@extends('layouts.layout')

@section('titulo')
    Detalle
@endsection

@section('principal')
<body>
        <main>
          <div class="card">
           <br>
            <div class="card__body">
              <div class="half">
                <div class="featured_text">
                  <h1>{{$producto->titulo}}</h1>
                  <br>
                  <p class="price"> $ {{$producto->precio}}</p>
                </div>
                <div class="image">
                  <img src="/storage/{{ $producto->img}}" alt="">
                </div>
              </div>
              <div class="half">
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
            <div class="card__footer">
              <div class="recommend">
                <p>Producto comendado por</p>
                <h3>Fernando Belasteguín</h3>
            </div>
            <form action="/carrito" method="post">
                @csrf
                <input type="hidden" value='{{$producto->id}}' name="id">
                <input type="submit" value="Agregar al Carrito">  
            </form> 
            </div>
          </div>
        </main>
      </body>
@endsection