<?php

// Conexión a la base de datos
    
    $basedatos = mysqli_connect("localhost","cl29-e3","Jk4GkU7^^","cl29-e3");  
    
// Sentencia imprescindible para que maneje adecuadamente las tildes, las eñes, ...
    mysqli_set_charset($basedatos, "utf8");
?>