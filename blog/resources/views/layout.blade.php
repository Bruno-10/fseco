<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
    @yield("links")
    <title>@yield('titulo')</title>
</head>
<body>
    <header class="row col-sm-12 col-md-12 col-lg-12 margencero" style="background-color:#0E0034;">
                   <div class="col-sm-12 col-md-12 col-lg-12 navbar navbar-expand-md navbar-dark">
                                <div class="logo col-sm-12 col-md-6 col-lg-3 justify-content-center">
                                    <a class="navbar-brand" href='\storage\logoppal.png'><img class="col-sm-12 col-md-6 col-lg-12" src="../img/logoppal.png" alt="logoprincipal"></a>
                                </div>
                                <nav class="col-sm-12 col-md-6 col-lg-4 buscar navbar navbar-light">
                                        <form class="form-inline flex-wrap ">
                                            <input class="caja_busc" type="search" placeholder="¿Qué estas buscando?" aria-label="Search">
                                            <button type="submit"><ion-icon name="search" class="icono"></ion-icon></button>
                                        </form>
                                </nav>
                            </div>
                            <nav class=" col-sm-12 col-md-12 col-lg-12 navbar navbar-expand-md navbar-dark">   
                                            <div class="hamburguesa align-items-right">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                                <span class="navbar-toggler-icon"></span>
                                                </button>   
                                            </div>
                                            <div class="collapse navbar-collapse" id="collapsibleNavbar">                                   
                                                <ul class="navbar-nav block">
                                                    <li class="nav-item">
                                                        <a class="nav-link color_menu" href="../recursos/index.php">Inicio</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../producto/listado.php">Productos</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../recursos/faq.php">FAQ</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../usuario/contacto.php">Contacto</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../usuario/registro.php"> <ion-icon name="person"></ion-icon>Registrarse</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="../usuario/login.php"> <ion-icon name="exit"></ion-icon> Iniciar sesion</a>  
                                                    </li>
                                                </ul>      
    </header>
    @yield('principal')




























































    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>