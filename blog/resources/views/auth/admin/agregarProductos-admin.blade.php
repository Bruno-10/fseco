@extends('layouts.layout')

@section('titulo')
    Agegar Productos
@endsection

@section('principal')
<div class="contenedor col-sm-12 col-md-12 col-lg-12">
    <div class="col-sm-12 col-md-12 col-lg-4 caja_derecha">
            <div>
                <h2> AGREGAR PRODUCTO  </h1>
            </div>
            <form action="/productos-admin" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="form-column">
                    <div class="col-md-7 col-lg-9">
                        <label for="titulo">Titulo</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" value=" " required>
                    </div>
                    <div class="col-md-7 col-lg-9">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" id="descripcion" value=" "  required>
                    </div>
                    <div class="col-md-7 col-lg-9">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" name="precio" id="precio" value=" "  required>
                    </div>
                    <div class="col-md-7 col-lg-9">
                            <label for="cantidad">Cantidad</label>
                            <input type="email" class="form-control" name="cantidad" id="cantidad" value=" "  required>
                        </div>
                     <div class="col-md-7 col-lg-9">
                            <label for="imgProducto">Imagen</label>
                            <input type="file" class="form-control" name="imgProducto" id="imgProducto"  value=" " required>            
                    </div>  
                    <div class="col-md-7 col-lg-9">
                            <label for="categoria">Categoria</label>
                            <br>
                            <select name="categoria" id="categoria">
                                <option value="0">...</option>
                                <option value="1">Paletas</option>
                                <option value="2">Indumentaria</option>
                                <option value="3">Accesorios</option>
                                <option value="4">Paleteros/mochilas</option>
                                <option value="5">Pelotas</option>
                            </select>
                    </div>
                    <div class="col-md-7 col-lg-9"> 
                        <br>
                        <button class="btn btn-success" type="submit">Agregar</button>
                        <button class="btn btn-danger" type="submit">Cancelar</button>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection