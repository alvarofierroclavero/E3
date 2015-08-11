<?php
$nombre = $_POST["name"];
$correo = $_POST["email"];
if ($_POST[espanol] == "esp") {
    $idioma = $_POST["espanol"];  
} else if ($_POST[ingles] == "ing") {
    $idioma = $_POST[ingles]; 
}

echo $idioma;
?>

<html>
<body>
<!--
Welcome <?php echo $nombre; ?><br>
Your email address is: <?php echo $correo; ?>
Tu lengua es: <?php echo $idioma; ?>
-->

</body>
</html>