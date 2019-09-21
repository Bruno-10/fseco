<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="css/index_1.css">
    <link rel="stylesheet" href="css/footer1.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Home</title>
</head>
    <body>
        <div class="container-fluid padding">
                    <?php require_once("header.php"); ?>
                    <section id="carousel" class="row col-sm-12 col-md-12 col-lg-12 margencero">
                        <div class="col-sm-12 col-md-12 col-lg-12 contenedorcarrusel">
                                <div class="bd-example">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="img\WhatsApp Image 2019-09-12 at 19.00.48.jpeg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img\WhatsApp Image 2019-09-12 at 19.05.35.jpeg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="img\WhatsApp Image 2019-09-12 at 19.00.48.jpeg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                            </div>
                                        </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                        </div> 
                    </section>
                    <main class="col-sm-12 col-md-12 col-lg-12 d-flex">
                        <div class="productos col-sm-12 col-md-4 col-lg-3">
                            <img class="col-sm-12 col-md-4 col-lg-10" src="img/paleta_1.jpg" alt="paleta">
                        </div>
                        <div class="productos col-sm-12 col-md-4 col-lg-3">
                            <img class="col-sm-12 col-md-4 col-lg-10" src="img/paleta_2.jpg" alt="paleta">
                        </div>
                        <div class="productos col-sm-12 col-md-4 col-lg-3">
                            <img class="col-sm-12 col-md-4 col-lg-9" src="img/paleta_3.jpg" alt="paleta">
                        </div>
                        <div class="productos col-sm-12 col-md-4 col-lg-3">
                            <img class="col-sm-12 col-md-4 col-lg-10" src="img/paleta_1.jpg" alt="paleta">
                        </div>
                        <div class="productos col-sm-12 col-md-4 col-lg-3">
                            <img class="col-sm-12 col-md-4 col-lg-10" src="img/paleta_2.jpg" alt="paleta">
                        </div>
                        <div class="productos col-sm-12 col-md-4 col-lg-3">
                            <img class="col-sm-12 col-md-4 col-lg-9" src="img/paleta_3.jpg" alt="paleta">
                        </div>
                    </main>
                    <?php require_once("footer.php"); ?>
        </div>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>