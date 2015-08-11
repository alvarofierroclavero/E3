<?php

//
// Aquí capturamos la bandera/botón que se ha pulsado en la página principal
//
if ($_POST[espanol] == "esp") {
    $idioma = $_POST["espanol"];  
} else if ($_POST[ingles] == "ing") {
    $idioma = $_POST[ingles];     
} else if ($_POST[frances] == "fra") {
    $idioma = $_POST[frances];     
} else if ($_POST[aleman] == "ale") {
    $idioma = $_POST[aleman];     
} else if ($_POST[italiano] == "ita") {
    $idioma = $_POST[italiano];     
} else if ($_POST[ruso] == "rus") {
    $idioma = $_POST[ruso];     
} else {
    $idioma = "esp";
}

//echo $idioma;

?>