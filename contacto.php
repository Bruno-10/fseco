<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/contacto.css">
    <title>Contacto</title>
</head>
<body>
    <header class="row col-sm-12 col-md-12 col-lg-12 margencero">
                            <div class="col-sm-12 col-md-lg-12 padding">
                                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                                        <div class="logo">
                                            <a class="navbar-brand" href="#">Logo</a>
                                        </div>
                                        <div class="hamburguesa align-items-right">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>   
                                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                                <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="index.php">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="usuario.php">Perfil</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="login.php">Log-In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="registro.php">Register</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="faq.php">F.A.Q</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                                </li>
                                                </ul>
                                            </div>
                                        </div> 
                                        <div class="carrito">
                                             <a href="#"><ion-icon class="cart" name="cart"></ion-icon></a>
                                        </div>
                                </nav>
                           </div>
    </header>

    <main>
        <div class="flex">
            <div class="container">
                <form action="index.php">

                        <h3>Ecribinos</h3>

                        <label for="fname">Nombre</label>
                        <input type="text" id="fname" name="firstname" required placeholder="Tu Nombre..">

                        <label for="lname">Apellido</label>
                        <input type="text" id="lname" name="lastname" required placeholder="Tu Apellido..">

                        <label for="email">Email</label>
                        <br>
                        <input type="email" id="email" name="email" required placeholder="Tu Email..">

                        <label for="subject">Motivo</label>
                        <textarea id="subject" name="subject" placeholder="Escribenos algo.." style="height:200px"></textarea>

                        <input type="submit" value="Enviar">
                        <input type="reset" value="Borrar">
                </form>
            </div>

            <div class="direccion">
                <h4>Venta al Publico</h4>
                <p> <span>Email:</span> <a href="mailto:ventas@ventas.com">ventas@ventas.com</a></p>
                <span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a>

                <h4 class="alejar">Venta al Pormayor</h4>
                <p> <span>Email:</span> <a href="ventaspormayor@ventas.com">ventaspormayor@ventas.com</a></p>
                <span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a>

                <h4 class="alejar">Ubicacion</h4>
                <p> <span>Direccion:</span> Córdoba 2035, S2000AXG Rosario, <br> Santa Fe</p>
                <span>Tel:</span><a href="tel:+543411554365">+54 341-1554365</a>
            </div>
        </div>

        <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.2604253531076!2d-60.65339048510845!3d-32.94413307909046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7abf3b0d57a0d%3A0x1699ceda514e7c6c!2sDigital%20House%20-%20Rosario!5e0!3m2!1ses!2sar!4v1568393086098!5m2!1ses!2sar" width="100%" height="300vh" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

    </main>

    <footer class="row col-sm-12 col-md-12 col-lg-12 margencero">
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>