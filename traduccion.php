<?php


// La variable $cadena es lo que se quiere traducir
// La variable $lengua es opcional, aunque finalmente se emplea siempre.
// Puede valer: 'esp, 'ing', 'fra', 'ale', 'ita' y 'rus'.
//
// Los textos breves, como por ejemplo los de los menús, aparecen directamente en estas matrices.
//
// Los textos más largos tienen un nombre en clave y están almacenados en la base de datos.
//
// Ejemplo de nombre en clave: 't_academias', que es el texto introductorio en el que habla de
// las academias.

function __($cadena, $lengua = null) {

// Conexión a la base de datos para la traducción de textos largos
    include("conexion_BD.php");
    
    $textos_ingles = array (
        "Nosotros" => "About us",
        "Aprende español" => "Learn Spanish",
        "Descubre España" => "Discover Spain",
        "Actualidad" => "Blog",
        "Contacto" => "Contact",
        "Registrarse" => "Sign In",
        "Iniciar sesión" => "Check In",
        "Academias" => "Academies",
        "Internados" => "Internship",
        "Campamentos" => "Camps",
        "Material didáctico" => "Educational materials",
        "Lugares con encanto" => "Charming places",
        "Pequeños museos" => "Small museums",
        "Clases de cocina" => "Cooking classes",
        "Turismo del vino" => "Wine tourism",
        "Cultura" => "Culture",
        "Saber más &raquo;" => "Know more &raquo;"
    );   
    $textos_frances = array (
        "Nosotros" => "Nous",
        "Aprende español" => "Apprend l'espagnol",
        "Descubre España" => "Decouvre l'Espagne",
        "Actualidad" => "Blog",
        "Contacto" => "Contactez-nous",
        "Registrarse" => "S'inscrire",
        "Iniciar sesión" => "Se connecter",
        "Academias" => "Academies",
        "Internados" => "Internats",
        "Campamentos" => "Campements",
        "Material didáctico" => "Matériel didactique",
        "Lugares con encanto" => "Charmants endroits",
        "Pequeños museos" => "Petits musées",
        "Clases de cocina" => "Classes de cuisine",
        "Turismo del vino" => "Tourisme du vin",
        "Cultura" => "Culture",
        "Saber más &raquo;" => "En savoir plus &raquo;"
    );   

    if ($lengua=='ing') {
        $lengua='ingles';
        $textos=$textos_ingles;
    } elseif ($lengua=='fra') {
        $lengua='frances';
        $textos=$textos_frances;
    } elseif ($lengua=='esp') {
        $lengua='espanol';
    }
    
//Si es una cadena corta que se encuentra en las matrices textos_ingles, textos_frances, ...
    if(substr($cadena,0,2)!="t_") {
        if(isset($textos[$cadena])) {
            $cadena = $textos[$cadena];
        }
        return $cadena;
    
// En caso contrario, se trata de un texto largo y lo busca en la base de datos
// Se ha codificado como una cadena que empieza por «t_» y tiene un nombre identificativo.

    } else {
            
            $peticion = "SELECT * FROM textos WHERE nombre_texto='".$cadena."'";

            $filas = mysqli_query($basedatos, $peticion); 
            $num_filas = mysqli_num_rows($filas);

            $fila = mysqli_fetch_array($filas);
            $cadena=$fila[$lengua];
            return $cadena;
    }
}





?>

