<?php
require_once("../funciones/function.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	<link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/listado.css">
	<link rel="stylesheet" href="../css/footer1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <title>Productos</title>
</head>
    <body>
        <div class="container-fluid padding">
        <?php require_once("../recursos/header.php"); ?>
                    <main class="row col-sm-12 col-md-10 col-lg-10 margencero">
                            <nav class="categorias col-sm-2 col-md-2 col-lg-2 margencero">
                                    <header class="card-header col-sm-12">
                                		<h5 class="title">Categorias</h5>
                                    </header>
                                    <ul class="navegacion">
                                        <li class="secciones"><a href="listado.php?cat=1">PALETAS</a></li>
                                        <li class="secciones"><a href="listado.php?cat=2">INDUMENTARIA</a></li>
                                        <li class="secciones"><a href="listado.php?cat=3">ACCESORIOS</a></li>
                                        <li class="secciones"><a href="listado.php?cat=4">PALETEROS, MOCHILAS, FUNDAS</a></li>
                                        <li class="secciones"><a href="listado.php?cat=5">PELOTAS</a></li>
                                    </ul>
                            </nav>
                            <section class="row col-sm-8 col-md-10 col-lg-10 cvip-products">
							<?php 
							if($_GET == []) { 
								$result = listarProductos(); }	
								else if ($_GET["cat"]== 1) { 
									$result = listarProductosPorCategoria(1); }
								else if($_GET["cat"]== 2) { 
								$result = listarProductosPorCategoria(2); }
								else if($_GET["cat"]== 3) { 
									$result = listarProductosPorCategoria(3); }
								else if($_GET["cat"]== 4) { 
										$result = listarProductosPorCategoria(4); }	
								else if($_GET["cat"]== 5) { 
                            $result = listarProductosPorCategoria(5); }	

                        	foreach ($result as $producto){ 
                            ?>
		                    	<article class="product col-sm-8 col-md-4 col-lg-3">
		                    		<div class="photo-container">
                                        <img class="photo col-lg-12" src='data:image/jpg;base64,<?php echo base64_encode($producto["imgProducto"])?>' alt="pdto 03">
		                    		</div>
		                    		<h2><?php echo $producto["titulo"]; ?></h2>
									<p><?php /* echo $producto["descripcion"]; */ ?></p>
									<p><?php echo "$".$producto["precio"]; ?></p>
                                    <a class="btn btn-success" href="detalle.php?id=<?=$producto["id_prod"]; ?>"> Ver Mas </a>
									
								</article>
								<?php } ?>
		                    </section>
                    </main>  
                    <?php require_once("../recursos/footer.php"); ?>
        </div>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>