<?php
//parametros para configurar la conexion de para la base de datos
    $host = "localhost";
    $basededatos = "recomienda";
    $usuariodb = "root";
    $clavedb = "";

//LISTA DE TABLAS DE NUESTRA BASE DE DATOS
    $tabla_db1 = "celular";//tabla de usuarios
    $tabla_db2 = "usuario";
    error_reporting(0);//no muestra error


    $conexcion =  mysqli_connect($host, $usuariodb, $clavedb, $basededatos);

    if($conexcion->connect_errno){
        echo "la base de datos esta inestable  por favor intentalo mas tarde <br>";
        exit();
    }
    else {
        // echo "base de datos conectado <br>";
    }
?>