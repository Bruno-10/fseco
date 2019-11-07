<?php
    function insertar($sql){
        $db = new PDO ("mysql:host=127.0.0.1;dbname=padelsport_db;port=3306","root","",);
        $query = $db->prepare($sql);
        $query -> execute();
    }
?>