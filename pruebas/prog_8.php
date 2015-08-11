<?php

include ('welcome1.php');

?>

<html>
<head>
<script>
     var idioma="<?php echo $idioma; ?>";
</script>

</head>

<body>

<p id="respuesta">Hola: </p>
<form method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<button name="espanol" type="submit" value="esp">español</button>
<button name="ingles" type="submit" value="ing">ingles</button>
</form>

<script type="text/javascript">
// Muy importante que este script vaya después de que el navegador
// haya creado ya el elemento «respuesta». No se puede situar antes.
// 
 
 if (idioma=="esp") {
        document.getElementById("respuesta").innerHTML = "esp";
 } else {
     document.getElementById("respuesta").innerHTML = "ing";
 }
</script>

<!--
<script type="text/javascript">
var elem = document.getElementById("espanol");
elem.value = "esp";
</script>
-->
</body>
</html>