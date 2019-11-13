<?php

require_once("../../funciones/function.php");

$id = $_GET["id"];
 $eliminar = eliminarProductoID($id);
if ($eliminar == "exito") {
    header("location:modificar-admin.php?exito");
} else {
    header("location:modificar-admin.php?error");
}




?>