<?php
use App\Http\Controllers\Helper;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    @yield("links")
    <title>@yield('titulo')</title>
</head>
<body>
    <header class="row col-sm-12 col-md-12 col-lg-12 margencero" style="background-color:#0E0034;">
        <div class="col-sm-12 col-md-12 col-lg-12 navbar navbar-expand-md navbar-dark">
                    <div class="logo col-sm-12 col-md-6 col-lg-3 justify-content-center">
                        <a class="navbar-brand" href="/"><img class="col-sm-12 col-md-6 col-lg-12" src="\storage\logoppal.png" alt="logo de la empresa"></a>
                    
                    </div>
                    <nav class="col-sm-12 col-md-6 col-lg-4 buscar navbar navbar-light">
                            <form class="form-inline flex-wrap ">
                                <input class="caja_busc" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
                                <button type="submit"><ion-icon name="search" class="icono"></ion-icon></button>
                            </form>
                    </nav>
        </div>
        <nav class=" col-sm-12 col-md-10 col-lg-10 navbar navbar-expand-md navbar-dark">   
            <div class="hamburguesa align-items-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>   
            </div>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">                                   
                <ul class="navbar-nav block">
                    <li class="nav-item">
                        <a class="nav-link color_menu" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/producto">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                       
                    </li>
                    <li class="nav-item">
                            @if (Route::has('login'))
                            @auth     
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                        @else
                                            <ul class="navbar-nav block"> 
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                        <img src="/storage/{{ Auth::user()->img}}" alt="" height="40">
                                                        {{ Auth::user()->nombre }} <span class="caret"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                            <a class="nav-link" href="usuarioCarrito"><ion-icon class="cart" name="cart" style="color: black;"></ion-icon></a>
                                                        @if (!Helper::noEsAdmin())
                                                        <a class="dropdown-item" href="/admin">
                                                            Panel de control
                                                        </a>
                                                        @endif
                                                        <a href="/usuario" class="dropdown-item">Perfil</a>
                                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                                            {{ __('Logout') }}
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                @endguest                                
                                @else
                                    <ul class="navbar-nav block">
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="nav-link">Iniciar Sesion</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                                        </li>
                                        @endif
                                    </ul>   
                            @endauth
                        @endif        
                    </li>
                </ul>
            </div>        
        </nav>                                    
    </header>

    @yield('principal')
    
    <footer class="col-sm-12 col-md-12 col-lg-12">
            <div class="logotipo col-sm-12 col-md-4 col-lg-4" >
                <a class="nav-link" href="/"><img src="\storage\logopsport.jpg" alt="logo de la empresa"></a>
            </div>       
            <div class="info col-sm-12 col-md-4 col-lg-4">
                    <div>
                        <h3>Mas Informacion</h3>
                    </div>
                    <div class='links'>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../usuario/usuario.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../usuario/login.php">Log-In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../usuario/registro.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./recursos/faq.php">F.A.Q</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contacto">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="/producto">Productos</a>
                            </li>
                        </ul>
                    </div>           
            </div>
            <div class="contacto col-sm-12 col-md-4 col-lg-4" >
                <div>
                    <h3>Datos de Contacto</h3>
                </div>
                <div class='links'>
                    <div class='contenido'>
                        <div>
                            <div class='icono_nombre'>
                                <i class="fas fa-at"></i><span>Email</span>
                            </div>
                            <div>
                                <a href="mailto:ventas@ventas.com">psort@padel.com</a>
                            </div>
                        </div>
                        <div>
                            <div class='icono_nombre'>
                                <i class="fas fa-phone-square"></i><span>Tel</span>
                            </div>
                            <div>
                                <a href="tel:+543411554365">+54 341-1554365</a>
                            </div>
                        </div>
                        <div>
                            <div class='icono_nombre'>
                                <i class="fab fa-whatsapp"></i><span>WhatsApp</span>
                            </div>
                            <div>
                                <a href="tel:+543411554365">+54 341-1554365</a>
                            </div>
                        </div>
                        <div>
                            <div class='icono_nombre'>
                                <i class="fab fa-instagram"></i><span>Instagram</span>
                            </div>
                            <div>
                                <a href="https://www.instagram.com/padelsportgalarza/">Padel Sport Galarza</a>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
    </footer>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>