<?php

    //Aquí tengo acceso a la variable creada en index.php gracias a
    //la función session_start()
    
    session_start();
        
    print_r ($_SESSION);
    echo $_COOKIE['id'];
?>