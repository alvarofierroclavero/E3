<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Álvaro Fierro">
		<meta name="description" content="Página para Español En España">
        
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Español en España</title>
		<script type="text/javascript" src="jquery.min.js"></script>

	 <!--Bootstrap, ¡siempre después de jquery! -->
		<link href="css/bootstrap.min.css" rel="stylesheet">


		<style>
			
			#contenedor-global {
				background-image: url(Metropol-Parasol-51_full.jpg);
				width:100%; <!--Necesario para que ocupe todo el ancho -->
				height:95%;
				background-size:cover;
			}
		
			#talla {
				font-size:70%;
				color:#286090;
				padding: 0 15px 0 0;
			}
			
			#sobre {
				font-size:220%;
				color:#114483;
			}
			.box {
				border:1px solid grey;
			}
			
			#parasol {
				width:80%;
				height:80%;
			}
			
			.menu {
				padding:7px 4px 0 0;
			}
			
			.blanco {
				background-color:white;
				opacity: .85; /* Standard: FF gt 1.5, Opera, Safari, CSS3 */
				filter: alpha(opacity=85); /* IE lt 8 */
						-ms-filter: "alpha(opacity=85)"; /* IE 8 */
						-khtml-opacity: .85; /* Safari 1.x */
						-moz-opacity: .85; /* FF lt 1.5, Netscape */
			}
			
		</style>
	
	</head>
	<body>
		<div class="container" id="contenedor-global">
		<!-- Menú de la cabecera de la página -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">		
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Navegación</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="" class="navbar-brand">Español en España</a>				
					</div> <!-- cabecera navbar derecha -->	
                    
					<div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">			
                            <li><a href="nosotros.html">Nosotros</a></li>	
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aprende español<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Academias</a></li>
                                    <li><a href="">Internados</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="">Campamentos</a></li>  
                                    <li role="separator" class="divider"></li>
                                    <li><a href="">Material didáctico</a></li>  							
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conoce España<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="">Lugares con encanto</a></li>
                                    <li><a href="">Pequeños museos</a></li>							
                                    <li role="separator" class="divider"></li>
                                    <li><a href="">Clases de cocina</a></li>
                                    <li><a href="">Turismo del vino</a></li>       
                                </ul>
                            </li>									
                            <li><a href="wordpress/">Blog</a></li>
                            <li><a href="registrarse.php">Registrarse</a></li>      
                            <li><a href="iniciar_sesion.php">Iniciar sesión</a></li>
                        </ul> 	
                        <ul class="collapse navbar-collapse navbar-right">
                            <li><a href="">Hola</a></li>
                        </ul>
                    </div> <!-- cabecera menú -->
                </div>
			</nav>
			
			<!-- Jumbotron con mensaje grande -->
			<div class="jumbotron blanco">
				<div class="container">
					<div class="col-md-8">
						<h1>Español en España</h1>
						<p>Si quieres aprender español en España mientras disfrutas de la cultura española, ésta es tu página.</p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button">Saber más &raquo;</a></p>
					</div>
					<div class="col-md-4">
						<image id="parasol" 
						src="http://s3.amazonaws.com/europaconcorsi/project_images/2554234/Metropol-Parasol-51_full.jpg">
					</div>
				</div>
			</div> <!-- Jumbotron -->

			<div class="container">
				<!-- Example row of columns -->
				<div class="row">
			  
					<div class="col-md-4 blanco">
					  <h2><span class="glyphicon glyphicon-paperclip" id="talla"></span>Academias</h2>
					  <p>Aquí encontrarás las mejores academias de España para aprender nuestra lengua en el entorno más agradable. </p>
					  <p><a class="btn btn-default" href="#" role="button">Saber más &raquo;</a></p>
					</div>
					
					<div class="col-md-4 blanco">
					  <h2><span class="glyphicon glyphicon-tent" id="talla"></span>Campamentos</h2>
					  <p>Si lo que quieres es pasar una temporada en España con más personas que desean aprender español, entra aquí. </p>
					  <p><a class="btn btn-default" href="#" role="button">Saber más &raquo;</a></p>
                    </div>
				   
					<div class="col-md-4 blanco">
						<h2><span class="glyphicon glyphicon-home" id="talla"></span>Internados</h2>
						<p>Si deseas pasar un curso entero estudiando español en régimen de pensión completa, aquí te ofrecemos los mejores internados.</p>
						 <p><a class="btn btn-default" href="#" role="button">Saber más &raquo;</a></p>
					</div>
					
					<div class="col-md-6 blanco">
						<h2><span class="glyphicon glyphicon-heart" id="talla"></span>Lugares con encanto</h2>
						<p>España es un enclave privilegiado que está lleno de sitios inolvidables en los que podrás divertirte al tiempo que te dedicas a aprender español: Jardines, espacios naturales, reservas de la biosfera, lugares patrimonio de la humanidad ...</p>
						<p><a class="btn btn-default" href="#" role="button">Saber más &raquo;</a></p>
					</div>
					
					<div class="col-md-6 blanco">
						<h2><span class="glyphicon glyphicon-book" id="talla"></span>Cultura</h2>
						<p>Por su excepcional emplazamiento, las grandes civilizaciones mediterráneas se han asentado en España a lo largo de los siglos. 
						Una manera de acercarse a esta realidad histórica es visitar sus museos, conocer su folklore, disfrutar de su gastronomía.</p>
						<p><a class="btn btn-default" href="#" role="button">Saber más &raquo;</a></p>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		  
			<hr>

			<footer>
				<div class="row">
					<div class="col-md-4">
						<h6 class="blanco">&copy; Español en España, 2015</h6>
					</div>
				</div>
			</footer>
		</div> <!-- contenedor-global -->
	
        <script>
            $("#contenedor-global").css("height",$(window).height());
            $("#contenedor-global").css("width",$(window).width());
        </script>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	
    </body>
</html>