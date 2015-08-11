<?php
$nombre = $_POST["name"];
$correo = $_POST["email"];
if ($_POST[espanol] == "esp") {
    $idioma = $_POST["espanol"];  
} else if ($_POST[ingles] == "ing") {
    $idioma = $_POST[ingles]; 
}

//echo $idioma;
?>
