<?php

if(isset($_POST["submit"])){

    $nombre = $_POST["nombre"] . " " . $_POST["apellido"];
    $envia = $_POST["email"];
    $mensaje = $_POST["motivo"];

    $para = "matiasmartinelli12@icloud.com";
    $motivo = "Padel Sport Web";
    $headers =  "From: " . $envia;
    $mensajeF = "Recibiste un email de " . $nombre .  "\n\n" . $mensaje;

    mail($para, $motivo, $mensaje, $headers);
    header("Location: ../usuario/contacto.php");

}


