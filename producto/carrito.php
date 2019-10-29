<?php require_once("../funciones/function.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../css/carrito.css">
    <link rel="stylesheet" href="../css/footer1.css">
    <link rel="stylesheet" href="../css/master.css">
    
    <title>Home</title>
</head>
    <body>
        <div class="container-fluid padding">
            <?php require_once("../recursos/header.php"); ?>
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
                                <?php 
                                    if (isset($_SESSION["carrito"])){
                                        $productos = $_SESSION["carrito"];
                                    
                                    dibujarProductosCarrito($productos);
                                    }
                                    
                                ?>
                                
                            
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
                    </main>
                    
                    <?php require_once("../recursos/footer.php"); ?>
        </div>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>