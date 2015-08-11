<?php
    
    $basedatos = mysqli_connect("localhost","cl29-e3","Jk4GkU7^^","cl29-e3");
                    
    if (mysqli_connect_error()) {
        echo "Hay problemas de acceso a la BD";  
    } 
    
    //$peticion = "INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `Sobrenombre`, `Correo`, `Contrasena`) VALUES ('Ildefonso','Matas Reyes','imata','studio@yahoo.es','repana')";
    
    //$peticion = "UPDATE `usuarios` SET `correo`='correo@gmail.com' WHERE `id`= 2 LIMIT 1";
    
    //$resultado = mysqli_query($basedatos, $peticion);
    
    //$peticion = "SELECT * FROM usuarios WHERE Nombre='Alvaro'";
    
    //$peticion = "SELECT * FROM usuarios WHERE Correo LIKE '%gm%'";

    //$peticion = "SELECT * FROM usuarios WHERE Nombre LIKE 'A%'";
    
    //$peticion = "SELECT * FROM usuarios WHERE id < 4 OR Contrasena != ''";
    
    //$peticion = "SELECT `nombre` FROM usuarios";
    
    //Cuando un campo tiene caracteres extraños, como ', es necesario emplear una función especial
    
    $nombre="Ian O'Neil";
    
    $peticion = SELECT `nombre` FROM usuarios WHERE nombre='".mysqli_real_escape_string($basedatos,$nombre)."'";
    
    if ($resultado = mysqli_query($basedatos, $peticion)) {
        echo mysqli_num_rows($resultado);
        while ($fila = mysqli_fetch_array($resultado)) {
           print_r($fila);         
        }  
    } else {
        echo "No funciona";
    }
    
?>
    