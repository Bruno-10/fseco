<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link rel="stylesheet" href="css/master.css">
        <link rel="stylesheet" href="css/footer1.css">
        <link rel="stylesheet" href="css/registro_1.css">
        <title>Registro</title>
    </head>
    <body>
        <div class="container-fluid padding">
        <?php require_once("header.php"); ?>
                <main class="row col-sm-12 col-md-12 col-lg-12 main margencero">     
                    <div class="col-sm-12 col-md-12 col-lg-6 caja_form">
                        <form class="needs-validation" novalidate>
                            <h2>Registráte</h2>
                            <div class="form-column">
                                <div class="col-md-4 col-lg-7">
                                    <label for="validationCustom01">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom01" required>
                                </div>
                                <div class="col-md-4 col-lg-7">
                                    <label for="validationCustom02">Apellido</label>
                                    <input type="text" class="form-control" id="validationCustom02" required>
                                </div>
                                <div class="col-md-4 col-lg-7">
                                    <label for="validationCustom03">Email</label>
                                    <input type="email" class="form-control" id="validationCustom03" required>
                                </div>
                                <div class="col-md-4 col-lg-7">
                                    <label for="validationCustomUsername">Usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-7">
                                    <label for="validationCustom04">Contraseña</label>
                                    <input type="password" class="form-control" id="validationCustom04" required>
                                </div>
                                <div class="col-md-4 col-lg-7"> 
                                    <br>
                                    <button class="btn btn-success" type="submit">Enviar</button>
                                    <button class="btn btn-danger" type="submit">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                </main>
                <?php require_once("footer.php"); ?>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </div>
    </body>
</html>