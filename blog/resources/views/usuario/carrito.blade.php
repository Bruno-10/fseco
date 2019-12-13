@extends('layouts.layout')

@section('titulo')
    Carrito
@endsection
@section('links')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://use.fontawesome.com/c560c025cf.js"></script>

@endsection

@section('principal')
    <div class="container">
         <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Carrito
                <a href="" class="btn btn-outline-info btn-sm pull-right">Continuar comprando</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->
                    @foreach ($losProductos as $producto)
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-2 text-center">
                                    <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                            </div>
                            <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-4">
                                <h4 class="product-name"><strong>{{$producto->'titulo'}}</strong></h4>
                                <h4>
                                    <small>{{$producto->'descripcion'}}</small>
                                </h4>
                            </div>
                            <div class="col-12 col-sm-12 text-sm-center col-md-6 text-md-right row">
                                <div class="col-3 col-sm-3 col-md-6 text-md-right pre" style="padding: 0px;padding-top: 10px;">
                                    <h6><strong>{{$producto->'precio'}}</strong></h6>
                                </div>
                                <div class="col-4 col-sm-4 col-md-4">
                                    <div class="quantity">
                                        <input type="button" value="+" class="plus">
                                        <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                            size="4">
                                        <input type="button" value="-" class="minus">
                                    </div>
                                </div>
                                <div class="col-2 col-sm-2 col-md-2 text-right">
                                    <button type="button" class="btn btn-outline-danger btn-xs">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <div class="pull-right">
                        <a href="" class="btn btn-outline-secondary pull-right">
                            Actualizar carrito
                        </a>
                    </div>
                </div>
            @endforeach 
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Codigo">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-default" value="Usar cupon">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total: <b>{{$producto->'precio'}}</b>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection