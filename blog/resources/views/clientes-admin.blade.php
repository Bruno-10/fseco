@extends('layout')

@section('titulo')
     Productos
@endsection

@section('principal')

<div class="contenedor col-sm-12 col-md-12 col-lg-12">
    <div class="col-sm-12 col-md-12 col-lg-6 caja_izquierda">
            <div>
                <a class="btn btn-success" href="productos-admin/agregar"> Agregar Producto </a>
            </div>
            <table class="table border">
                    
                    <tr>
                        <th scope="col border">Id</th>
                        <th scope="col border">Nombre</th>
                        <th scope="col border">Apellido</th>
                        <th scope="col border">Email</th>
                        <th scope="col border"></th>
                    </tr>
                    @forelse ($clientes as $cliente)
                        <tr>
                            <td scope="col border">{{$cliente->id}}</td>   
                            <td scope="col border">{{$cliente->nombre}}</td>
                            <td scope="col border">{{$cliente->apellido}}</td>
                            <td scope="col border">{{$cliente->email}}</td>
                            {{-- <td scope="col border"><img src="/storage/{{ $cliente->img}}" alt="img producto" width="40"></td> --}}
                            <td scope="col border">
                            <a class="btn btn-danger" href="clientes-admin/eliminar/{{$cliente->id}}"> Eliminar</a></td>
                        </tr>
                    @empty 
                    <em> La lista esta vacia  </em>    
                    @endforelse 
                       
            </table>         
    </div>
</div>


@endsection