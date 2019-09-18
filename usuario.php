<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/usuario1.css">
    <title>Perfil</title>
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
                                                    <a class="nav-link" href="#">Perfil</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Log-In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="registro.php">Register</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">F.A.Q</a>
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
                    <main class="row col-sm-12 col-md-12 col-lg-12 margencero">
                        <div class="row col-sm-12 col-md-12 col-lg-12 emp-profile margencero padding">
                            <form method="post">
                                <div class="row col-sm-12 col-md-12 col-lg-12">
                                    <div class="col-md-4 cajausuario">
                                        <div class="profile-img marco">
                                            <img src="img/pelota.jpg" alt="profile picture"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12">
                                        <div class="profile-head">
                                                    <h5>
                                                        Nombre del usuario
                                                    </h5>
                                                    <h6>
                                                        Profesión
                                                    </h6>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos personales</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Compras realizadas</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--  <div class="col-md-2">
                                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                    </div>
                                </div>
                                <div class="row col-sm-12 col-md-12 col-lg-12">
                                    <div class="col-md-4">
                                        <div class="profile-work">
                                            <p>WORK LINK</p>
                                            <a href="">Website Link</a><br/>
                                            <a href="">Bootsnipp Profile</a><br/>
                                            <a href="">Bootply Profile</a>
                                            <p>SKILLS</p>
                                            <a href="">Web Designer</a><br/>
                                            <a href="">Web Developer</a><br/>
                                            <a href="">WordPress</a><br/>
                                            <a href="">WooCommerce</a><br/>
                                            <a href="">PHP, .Net</a><br/>
                                        </div>
                                    </div> -->
                                    <div class="col-md-8">
                                        <div class="tab-content profile-tab" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>User Id</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Kshiti123</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Kshiti Ghelani</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>kshitighelani@gmail.com</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Phone</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>123 456 7890</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Profession</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Web Developer and Designer</p>
                                                            </div>
                                                        </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Experience</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Expert</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Hourly Rate</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>10$/hr</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Total Projects</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>230</p>
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
                            </form>           
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