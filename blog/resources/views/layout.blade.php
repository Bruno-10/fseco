<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    @yield("links")
    <title>@yield('titulo')</title>
</head>
<body>








































    @yield('principal')

    <footer>
        <div class="logotipo" >
        <a class="nav-link" href="/"><img src="\storage\logopsport.jpg" alt="logo de la empresa"></a>
        </div>
    
        <hr>
    
        <div class="info" >
            <div class="contiene" >
                    <h3>Mas Informacion</h3>
    
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
                                <a class="nav-link" href="../usuario/contacto.php">Contacto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../producto/listado.php">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../producto/carrito.php"><ion-icon class="cart" name="cart"></ion-icon></a>
                            </li>
                    </ul>
            </div>
        </div>
    
        <hr>
    
        <div class="contacto" >
    
            <div class="contiene">
    
                <h3>Datos de Contacto</h3>
    
                <p><i class="fas fa-at"></i><span>Email:</span><a href="mailto:ventas@ventas.com">psort@padel.com</a></p>
    
                <p><i class="fas fa-phone-square"></i><span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a></p>
    
                <p><i class="fab fa-whatsapp"></i><span>Whats App:</span><a href="tel:+543411554365">+54 341-1554365</a></p>
    
                <p><i class="fab fa-instagram"></i><span>Instagram:</span><a href="https://www.instagram.com/padelsportgalarza/">Padel Sport Galarza</a></p>
    
            </div>
        </div>
     </footer>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>