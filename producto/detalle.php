<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/footer1.css">
    <link rel="stylesheet" href="css/detalle.css">
    <title>detalle</title>
</head>
<body>
                    <?php require_once("header.php"); ?>

                    <main>
                        <section class="producto">

                                <div class="imagen">
                                        <img src="img/paleta_2.jpg"  alt="">
                                </div>

                            <div class="desktop">

                                <div class="descripcion">
                                    <h4>Black Crown Joke 2018</h4>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident delectus soluta ab sequi repellat dolor illo labore, voluptas porro, error nobis! Cumque eius earum, quas sunt ad a debitis reiciendis.</li>
                                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa maiores natus enim odio, omnis unde necessitatibus sint veritatis nostrum nesciunt quaerat doloribus soluta cumque esse error repellat tempora dolorem? Ea?</li>
                                    </ul>
                                </div>

                                <div class="precio">
                                    <h3>$4000</h3>
                                    <p>En stock</p>
                                    <form action="#" method="GET">
                                     <!-- <input type="number" name="numero" id="numero" > -->
                                        <br>
                                        <a href="agregar.php?producto_id=34" ><input type="button"  value="Agregar al Carrito"></a>
                                    </form>
                                </div>

                            </div>

                        </section>

                    </main>

                    <?php require_once("footer.php"); ?>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>