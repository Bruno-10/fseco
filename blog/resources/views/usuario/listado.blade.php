@extends('layouts.layout')

@section('titulo')
     Listado Productos
@endsection

@section('principal')
    <main class="row col-sm-12 col-md-10 col-lg-10 margencero">
        <nav class="categorias col-sm-2 col-md-2 col-lg-2 margencero">
            <header class="card-header col-sm-12">
                <h5 class="title">Categorias</h5>
            </header>
                <ul class="navegacion">
                    <li class="secciones"><a href="listado.php?cat=1">PALETAS</a></li>
                    <li class="secciones"><a href="listado.php?cat=2">INDUMENTARIA</a></li>
                    <li class="secciones"><a href="listado.php?cat=3">ACCESORIOS</a></li>
                    <li class="secciones"><a href="listado.php?cat=4">PALETEROS, MOCHILAS, FUNDAS</a></li>
                    <li class="secciones"><a href="listado.php?cat=5">PELOTAS</a></li>
                </ul>
        </nav>

        <body>
        {{-- <section class="row col-sm-8 col-md-10 col-lg-10 cvip-products">
            @forelse ($productos as $producto)
                <article class="product col-sm-8 col-md-4 col-lg-3">
                    <div class="photo-container">
                        <img src="/storage/{{ $producto->img}}" alt="img producto" width="40">
                    </div>
                    <h2>{{$producto->titulo}}</h2>
                    <p>{{$producto->descripcion}}</p>
                    <p>{{$producto->precio}}</p>
                    <form action="detalle" method="GET">
                    @csrf
                    <input type="hidden" name="id" value="{{$producto->id}}">
                    <input type="submit" value="Ver más">  
                    </form>       
                </article>
            @empty 
        <em> La lista esta vacia  </em>    --}} 
   
    @foreach ($productos as $producto) 
        <main>
            <div class="card">
                <br>
                <div class="card__body">
                    <div class="half">
                        <div class="image">
                            <img src="/storage/{{ $producto->img}}" alt="">
                        </div>
                        <div class="featured_text">
                            <h1>{{$producto->titulo}}</h1>
                            <br>
                            <p class="price"> $ {{$producto->precio}}</p>
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
                </div>
                <div class="card__footer">
                    <div class="recommend">
                        <p>Producto recomendado por</p>
                        <h3>Fernando Belasteguín</h3>
                    </div>
                    <form action="detalle" method="GET">
                        @csrf
                        <input type="hidden" name="id" value="{{$producto->id}}">
                        <Button type="submit" > Ver más </Button>
                    </form> 
                </div>
            </div>
        </main>
        @endforeach
        </body>
    </main>








@endsection