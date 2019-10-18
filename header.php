<?php

if(!isset($_SESSION)){
    session_start();
};

if (!isset($_SESSION["usuario"])){
    $_SESSION["usuario"] = [];
}

$datosUsuario = $_SESSION["usuario"];   


?>
                <header class="row col-sm-12 col-md-12 col-lg-12 margencero" style="background-color:#0E0034;">
                            <div class="col-sm-12 col-md-12 col-lg-12 navbar navbar-expand-md navbar-dark">
                                <div class="logo col-sm-12 col-md-6 col-lg-3 justify-content-center">
                                    <a class="navbar-brand" href="index.php"><img class="col-sm-12 col-md-6 col-lg-12" src="img/logoppal.png" alt="logoprincipal"></a>
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
                                                <!-- Si session start es igual a vacio muestro esto:  -->
                                               <?php
                                                //En el if va la variable con la que identificas si estan logueados
                                                    if($datosUsuario == []) {
                                                        echo ('
                                                <ul class="navbar-nav block">
                                                <li class="nav-item">
                                                    <a class="nav-link color_menu" href="index.php">Inicio</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="listado.php">Productos</a>
                                                </li>
                                                 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="faq.php">FAQ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="registro.php"> <ion-icon name="person"></ion-icon>Registrarse</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="login.php"> <ion-icon name="exit"></ion-icon> Iniciar sesion</a>  
                                                </li>
                                                
                                                </ul>');}

                                               else { echo ('
                                                <ul class="navbar-nav block">
                                                <li class="nav-item">
                                                    <a class="nav-link color_menu" href="index.php">Inicio</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="listado.php">Productos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="usuario.php">Perfil</a>
                                                </li> 
                                                <li class="nav-item">
                                                    <a class="nav-link" href="faq.php">FAQ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="carrito.php"><ion-icon name="cart"></ion-icon>Carrito</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="logOut.php">LogOut</a> 
                                                </li>
                                                </ul>');};
                                                ?>
                                                  



                                            </div>   
                                </nav>
                    </header>