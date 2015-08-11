<?php

//Conexión a la base de datos para la traducción de textos largos
    include("conexion_BD.php");
    
    $cadena='t_academias';
    if($basedatos!=null) {
        echo"bien";
    } else {
        echo "mal";
    }
    $peticion = "SELECT * FROM textos WHERE nombre_texto='".$cadena."'";
    echo $peticion;  

    $filas = mysqli_query($basedatos, $peticion); 
    $num_filas = mysqli_num_rows($filas);
    echo $num_filas;
    $fila = mysqli_fetch_array($filas);
    $idioma='frances';
    $cadena=$fila[$idioma];
    echo $cadena;
?>