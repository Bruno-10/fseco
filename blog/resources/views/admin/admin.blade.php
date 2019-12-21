@extends('layouts.layout')

@section('titulo')
    Admin
@endsection


@section('principal')
    <div class="row botonesAdmin">
        <div class="contenedorBotones">
            <a class="btn btn-danger" href="productos-admin"> Productos</a></td>
            <a class="btn btn-danger" href="clientes-admin"> Clientes</a></td>
            <a class="btn btn-danger" href="principal-admin"> Prod. en pagina principal</a></td>
        </div>
    </div>
@endsection