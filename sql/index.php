<?php
    //Arranque de la sesión, es lo primero que hay que hacer
    session_start();
    
    $_SESSION['loginid']=1;
    //Esta variable permanece activa hasta que el usuario cierre todas las páginas de la sesión
    
    echo $_SESSION['loginid'];

?>