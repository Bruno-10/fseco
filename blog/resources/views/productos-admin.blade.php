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
                        <th scope="col border">Titulo</th>
                        <th scope="col border">Cantidad</th>
                        <th scope="col border">Imagen</th>
                        <th scope="col border"></th>
                        <th scope="col border"></th>
                    </tr>

                        <tr>
                            <td scope="col border"></td>
                            <td scope="col border"></td>
                            <td scope="col border"></td>
                            <td scope="col border">
                                <a class="btn btn-success" href="modificar-admin.php?id="> Modificar </a>
                            </td>
                            <td scope="col border">
                            <a class="btn btn-danger" href="eliminar-admin.php?id="> Eliminar</a></td>
                        </tr>
                       
            </table>         
    </div>
</div>

    
@endsection