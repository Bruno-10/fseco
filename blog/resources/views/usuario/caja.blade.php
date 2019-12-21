@php
Use App\Carrito;
@endphp
@extends('layouts.layout')

@section('links')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('js/main.js') }}" defer></script>
@endsection

@section('titulo')
    Caja
@endsection

@section('links')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="./css/form-validation.css" rel="stylesheet">
@endsection

@section('principal')
<div class="container Caja">
    <div class="py-5 text-center">
      <h2>Formulario de Pago</h2>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Tus productos</span>
          <span class="badge badge-secondary badge-pill">
            {{$cantidadTotalDeProductos}}
          </span>
          <br>
          
        </h4>
        <ul class="list-group mb-3">
          @foreach ($losProductosDelCarrito as $carrito)
          <li class="list-group-item d-flex justify-content-between lh-condensed col-sm-9 col-md-10">
              <div>
              <h6 class="my-0">{{$carrito->producto->titulo}}</h6>
             
                <small class="text-muted">{{$carrito->producto->descripcion}}</small>
              </div>
            <span class="text-muted">{{$carrito->cantidad}} x   {{$carrito->producto->precio}}</span>
            </li>
          @endforeach

          <li class="list-group-item d-flex justify-content-between col-sm-9 col-md-10">
            <span>Total</span>
            <strong>
              {{$precioTotal}}
            </strong>
          </li>
        </ul>

        <form class="card p-2" action=""  method="POST">
            @csrf
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Codigo de Descuento">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary validar">Validar</button>
            </div>
          </div>
        </form>
        @if (count($errors) > 0)
                
        <div class="alert alert-danger" style="
        margin-top: 18px;"  >
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>

      @endif
      </div>
        
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Direccion de Envio</h4>

        <form class="needs-validation" action="/compraExitosa" id="caja" style="display: contents;" method="POST" novalidate>
          @csrf

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Nombre</label>
            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="{{old('firstName')}}" required>
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label for="lastName">Apellido</label>
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="{{old('lastName')}}" required>
              <div class="invalid-feedback">
                Necesitas poner un apellido valido.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="" value="{{old('email')}}" required>
            <div class="invalid-feedback">
              Por favor ingrese un email valido;
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Direccion</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Calle " value="{{old('address')}}" required>
            <div class="invalid-feedback">
              Por favor ingrese su direccion de envio;
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">Direccion 2<span class="text-muted">(Opcional)</span></label>
            <input type="text" class="form-control" name="address2" id="address2" value="{{old('address2')}}" placeholder="Departamento o piso n°">
          </div>

          <div class="row">

            <div class="col-md-5 mb-3">
              <label for="country">Pais</label>
              <select class="custom-select d-block w-100" name="country" id="country" value="{{old('country')}}" required>
                <option value="">Selecciona...</option>
                <option>Argentina</option>
              </select>
              <div class="invalid-feedback">
                Por favor ingrese un pais valido.
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <label for="state">Provincia</label>
              <select class="custom-select d-block w-100" name="state" id="state" value="{{old('state')}}" required>
                <option value="">Seleccione...</option>
                <option>Santa Fe</option>
              </select>
              <div class="invalid-feedback">
                Por favor ingrese una provincia valida
              </div>
            </div>

            <div class="col-md-3 mb-3">
              <label for="zip">Codigo Postal</label>
              <input type="text" class="form-control zip" name="zip" id="zip" placeholder=""  value="{{old('zip')}}" required>
              <div class="invalid-feedback">
                Codigo Postal Obigatorio.
              </div>
            </div>

          </div>

          <div>
            <input type="hidden" name="productos" value="{{implode(',', $resultado)}}">
          </div>

        </form>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label elcheck" for="save-info">Guardar esta informacion para mi proxima compra</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Metodos de Pago</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label elcheck" for="credit">Tarjeta de Credito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label elcheck" for="debit">Tarjeta de Debito</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nombre en Tarjeta</label>
              <input type="text" class="form-control" name="cc-name" id="cc-name" placeholder="" required>
              <small class="text-muted">Nombre completo que se muestra en la carpeta</small>
              <div class="invalid-feedback">
                El nombre de la tarjeta es obligatorio
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Numero de tarjeta de credito</label>
              <input type="text" class="form-control" name="cc_number" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3 izquierda">
              <label for="cc-expiration">Vencimiento</label>
              <input type="text" class="form-control" name="cc-expiration" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Fecha de vencimiento obligatoria
              </div>
            </div>
            <div class="col-md-3 mb-3 izquierda">
              <label for="cc-cvv">Codigo de Seguridad</label>
              <input type="text" class="form-control" name="cc-cvv" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Codigo de Seguridad obligatorio
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <a class="btn btn-primary btn-lg btn-block elboton" id="boton" {{-- type="submit" --}} form="caja">Completar Compra</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js" integrity="sha256-ifihHN6L/pNU1ZQikrAb7CnyMBvisKG3SUAab0F3kVU=" crossorigin="anonymous"></script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
@endsection