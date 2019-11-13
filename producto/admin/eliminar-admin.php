<?php

require_once("../../funciones/function.php");

$id = $_GET["id"];
 $eliminar = eliminarProductoID($id);
if ($eliminar == "exito") {
    header("location:consulta-admin.php?exito");
} else {
    header("location:consulta-admin.php?error");
}




?>