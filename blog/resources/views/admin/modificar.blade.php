@extends('layouts.layout')

@section('titulo')
     Modificar Producto
@endsection

@section('principal')
    <div class="producto">
        <div class="card col-md-8 col-sm-12 col-lg-8 contenedor">
            <div><h2>Modificar producto</h2></div>
                <form action="/procesar-modificar" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="rectangulos">
                        <input type="hidden" name="id" value="{{$producto->id}}">
                        <label for="titulo">Titulo</label>
                        <br>
                        <input type="text" name="titulo" id="titulo" value="{{$producto->titulo}}">
                    </div>
                    <div class="rectangulos">
                        <label for="precio">Precio</label>
                        <br>
                        <input type="text" name="precio" id="precio" value="{{$producto->precio}}">
                    </div>
                    <div class="rectangulos">
                            <label for="precio">Cantidad</label>
                            <br>
                            <input type="text" name="cantidad" id="cantidad" value="{{$producto->cantidad}}">
                    </div>
                    <br>
                    <div class="rectangulos">
                        <label for="img">Imagen</label>
                        <img src="/storage/{{$producto->img}}" alt="img producto" width="40">
                        <br>
                        <input type="file" name="img" id="img" value="">
                    </div >
        
                    <div class="card rectangulos">
                        <label for="cat">Categoria</label>
                        <br>
                        <select name="categoria" id="categoria">
                                <option value="{{$producto->categoria}}">Categoría actual</option>
                                <option value="1">Paletas</option>
                                <option value="2">Indumentaria</option>
                                <option value="3">Accesorios</option>
                                <option value="4">Paleteros/mochilas</option>
                                <option value="5">Pelotas</option>
                        </select>
                    </div>                
                    <br>
                    <div class="descripcion">
                        <label for="descripcion">Descripcion</label>
                        <br>
                        <input type="textarea" name="descripcion" id="descripcion" value="{{$producto->descripcion}}">
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit">Enviar</button>
                    </div>
                   
            </form>
        </div>
    </div>


@endsection