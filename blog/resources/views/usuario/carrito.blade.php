@extends('layouts.layout')

@section('titulo')
    Carrito
@endsection

@section('principal')
    <div class="caja_carro col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
        <div class="carro row col-sm-12 col-md-8 col-lg-8 margencero">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>CARRITO</h2>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 margencero"> 
                <table class="table border">
                    <thead class="fondo">
                        <tr>
                        <th scope="col border"></th>
                        <th scope="col border">Producto</th>
                        <th scope="col border">Precio</th>
                        <th scope="col border">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($losProductos as $producto)
                            <tr>
                                <td scope="col border"><img id='carro_imagen' src='/storage/{{$producto->img}}'></td> 
                                <td scope="col border">{{$producto->titulo}}</td>
                                <td scope="col border">{{$producto->precio}}</td>
                                <td scope="col border">
                                        <select name="cantidad" id="cantidad">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <a href="carrito.php"> Actualizar</a>
                                </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
            <div class="col-sm-12 col-md-6 col-lg-6 margencero">
                <table class="table border">
                    <thead class="fondo">
                        <tr>
                        <th scope="row">TOTAL</th>
                        <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Subtotal</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Envio</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">Total</th>
                            <td></td>
                        </tr> 
                    </tbody>
                </table>
                <form action="caja.php" method="POST">
                    <div class="row col-sm-12 col-md-12 col-lg-12 justify-content-between"> 
                        <div class="col-sm-3 col-md-6 col-lg-4 boton">
                            <button class="btn btn-success " type="submit">ir a Caja</button>
                        </div>
                        <div class="col-sm-3 col-md-6 col-lg-4 boton">
                            <button class="btn btn-danger" type="submit">Cancelar</button>
                        </div>
                    </div>
                </form>   
            </div>  
        </div>      
    </div>
@endsection