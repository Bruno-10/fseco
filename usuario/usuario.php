<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="../css/footer1.css">
    <link rel="stylesheet" href="../css/master.css">
    <link rel="stylesheet" href="../css/usuario1.css">
    <title>Perfil</title>
</head>
    <body>
        <div class="container-fluid padding">
            <?php require_once("../recursos/header.php"); ?>
                    <main class="row col-sm-12 col-md-12 col-lg-12 margencero">
                        <div class="row col-sm-12 col-md-12 col-lg-12 emp-profile margencero">
                            <form method="post">
                                <div class="row col-sm-12 col-md-12 col-lg-12">
                                    <div class="col-md-6  cajausuario">
                                        <div class="profile-img marco row">
                                            <img src=<?php echo ("archivo/ImgUser" . $datosUsuario["imageId"] . "." . $datosUsuario["imageExt"]);?> alt="profile picture" class=""/>
                                            <div class="col-md-4 col-lg-8 col-sm-2">
                                                <div class="profile-head">
                                                    <h5>
                                                        <?= $datosUsuario["usuario"]; ?>
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <div id="datos">
                                <div class="profile-head"> 
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos personales</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Compras realizadas</a>
                                        </li>
                                    </ul>
                                </div>
                                   
                                    <div class="col-md-8">
                                        <div class="tab-content profile-tab" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Usuario</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?= $datosUsuario["usuario"]; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Nombre</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?= $datosUsuario["nombre"]; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?= $datosUsuario["email"]; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Telefono</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>341-1221211</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Profesion</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Programador</p>
                                                            </div>
                                                        </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Experiencia</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Junior</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>English Level</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Expert</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Availability</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>6 months</p>
                                                            </div>
                                                        </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Your Bio</label><br/>
                                                        <p>Your detail description</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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