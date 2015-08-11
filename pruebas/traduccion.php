<?php

// La variable $cadena es lo que se quiere traducir
// La variable $lengua es opcional
// 

function __($cadena, $lengua = null) {
    
     $textos_ingles = array (
        "Nosotros" => "About us",
        "¿Qué hacemos?" => "What we do?",
        "¿Dónde estamos?" => "Where we are?",
        "Contacto" => "Contact"
    );   
     $textos_frances = array (
        "Nosotros" => "Nous",
        "¿Qué hacemos?" => "Que fait-on?",
        "¿Dónde estamos?" => "Ou sommes nous?",
        "Contacto" => "Contacter"
    );   
    
    if($lengua=='ing') {
        $textos=$textos_ingles;
    } elseif ($lengua=='fra') {
        $textos=$textos_frances;
    }
    
    if($lengua != null) {
        if(isset($textos[$cadena])) {
            $cadena = $textos[$cadena];
        }
    }
	return $cadena;
}





?>

