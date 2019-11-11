<?php
    function conexion(){
        $dsn = "mysql:host=127.0.0.1;dbname=padelsport_db;port=3306";
        $usuario = "root";
        $pass = "";
        try{
            $db = new PDO ($dsn,$usuario,$pass);
            $db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ATTR_ERRMODE_EXCEPTION);
        }
        catch (PDOException $Exception){
            echo $Exception->getMessage();
        }  
    }
?>