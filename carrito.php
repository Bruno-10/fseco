<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/master.css">
    
    <title>Home</title>
</head>
    <body>
        <div class="container-fluid padding">
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
                    <main class="row margencero justify-content-around">
                        <div class="col-sm-12 col-md-11 col-lg-11">
                            <h2>CARRITO</h2>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5 margencero"> 
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
                                    <tr>
                                    <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/pelota.jpg"> </th>
                                    <td>Pelota</td>
                                    <td>$800</td>
                                    <td>1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/pelota.jpg"> </th>
                                    <td>Pelota</td>
                                    <td>$800</td>
                                    <td>1</td>
                                    </tr>
                                    <tr>
                                    <tr>
                                    <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/pelota.jpg"> </th>
                                    <td>Pelota</td>
                                    <td>$800</td>
                                    <td>1</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" class="tamaño"><img class="col-sm-1 col-md-6 col-lg-4" src="img/pelota.jpg"> </th>
                                    <td>Pelota</td>
                                    <td>$800</td>
                                    <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>  
                        <div class="col-sm-12 col-md-4 col-lg-5 margencero">
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
                                            <td>$800</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Envio</th>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total</th>
                                            <td>$950</td>
                                        </tr> 
                                    </tbody>
                            </table>
                            <div class="row col-sm-12 col-md-12 col-lg-12 justify-content-between"> 
                                <div class="col-sm-3 col-md-6 col-lg-4 boton">
                                    <button class="btn btn-success " type="submit">ir a Caja</button>
                                </div>
                                <div class="col-sm-3 col-md-6 col-lg-4 boton">
                                    <button class="btn btn-danger" type="submit">Cancelar</button>
                                 </div>
                                    
                            </div>
                        </div>  
                    </main>
                    
                    <footer class="row col-sm-12 col-md-12 col-lg-12 margencero">
                    </footer>
        </div>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>