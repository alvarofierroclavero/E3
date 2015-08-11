<?php


    ($_POST)
?>

<!doctype html>
<html>
<head>
	<title>UI Draggable</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script type="text/javascript" 
	src="jquery.min.js"></script>

		<script>
		
			
			
		</script>
</head>
<body>
	HOLA
	<!--
	<div>
		<button type="button"  onclick="funcion('esp')"> ESP </button>
		<br />
		<button type="button"  onclick="funcion('ing')"> ING </button>
		<p id="demo"></p>
	</div>

-->
	
	<script>
http://stackoverflow.com/questions/5004233/jquery-ajax-post-example-with-php
		$.ajax({  
			type: "POST",  
			url: "nombre_lengua.php",  
			data: { idioma: localStorage.getItem("yourValue"); }
        });
        
        function funcion(param) {
		   alert(param);
		   showHint(param);
           //document.getElementById("demo").innerHTML = param;
        }
		
		
	</script>

</body>
</html>