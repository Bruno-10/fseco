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
        <section class="row col-sm-8 col-md-10 col-lg-10 cvip-products">
            @forelse ($productos as $producto)
                <article class="product col-sm-8 col-md-4 col-lg-3">
                    <div class="photo-container">
                        <img src="/storage/{{ $producto->img}}" alt="img producto" width="40">
                    </div>
                    <h2>{{$producto->titulo}}</h2>
                    <p>{{$producto->descripcion}}</p>
                    <p>{{$producto->precio}}</p>
                    <a class="btn btn-success" href="detalle.php?id=<?=$producto->id ?>"> Ver mas </a>           
                </article>
            @empty 
    <em> La lista esta vacia  </em>    
    @endforelse 
@endsection