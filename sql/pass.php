<?php
    //Nivel 1 de seguridad, vulnerable en crackstation
    
    echo md5("password");
    echo " ";

    //Nivel 2 de seguridad
    
    $clave="lkdv987afbdafdbvladmb0986";
    
    echo md5($clave."password");
    
    //Nivel 3 de seguridad
    
    echo md5(md5($row['id']))."password");
?>