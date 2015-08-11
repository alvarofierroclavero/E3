<?php

    $nombre_cookie = "id";
    $valor_cookie = "1234";
    
    echo time(); 
    
    //setcookie("id","1234",time()+60*60*24);
    setcookie("id", "", time()-3600);
    echo "Hola";
    echo $_COOKIE['id'];
?>