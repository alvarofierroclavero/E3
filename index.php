<?php
    session_start();
    //print_r($_SESSION);
    include('nombre_lengua.php');
    include ('traduccion.php');


?>

<!DOCTYPE html>
<html lang="en">
	<head>
    
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Álvaro Fierro">
		<meta name="description" content="Página para Español En España">
        
		<title>Español en España</title>

     <!-- jQuery -->
		<script type="text/javascript" src="jquery.min.js"></script>

	 <!--Bootstrap, ¡siempre después de jquery! -->
		<link href="css/bootstrap.min.css" rel="stylesheet"> 
        
     <!-- Carrusel 
        <link rel="stylesheet" href="./css/demo.css" type="text/css" media="screen" /> -->
        <link rel="stylesheet" href="./css/flexslider.css" type="text/css" media="screen" />     
        <script type="text/javascript" src="./js/flex-slider/jquery.flexslider-min.js"></script>

     <!-- Estilos de la página -->
        <link rel="stylesheet" type="text/css" href="./css/estilos.css" />
        
        <script>
            var idioma="<?php echo $idioma; ?>";
        </script>
        <script>
        
            // Declara el evento cambia_lengua para que se active
            // siempre que la variable común Lengua se cambie desde
            // otra página de la aplicación
            window.addEventListener('storage', cambia_lengua, false);     
            
        // Inicialmente la lengua es el español          
            function carga_idioma() {
                if(localStorage.getItem("lengua")==null) {
                 localStorage.setItem("lengua",'esp');  
                }
                document.getElementById("idioma").innerHTML = localStorage.getItem("lengua");
            }
            
        // Función activada por las banderas de cambio de idioma
        
            function funcion(param) {
                localStorage.setItem("lengua",param);

                document.getElementById("idioma").innerHTML = localStorage.getItem("lengua");
            }
            
        // Función activada cuando en otro lugar de la aplicación se cambia de idioma
        // Igual hay que quitarla
            
            function cambia_lengua(evt) {
	//actualizamos la variable 
                document.getElementById("idioma").innerHTML = evt.newValue;
            }
        </script>
        
 
	</head>
	<body onload="carga_idioma()">
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
                            <li><a href="nosotros.html"><?php echo __('Nosotros',$idioma); ?></a></li>	
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Aprende español',$idioma); ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><?php echo __('Academias',$idioma); ?></a></li>
                                    <li><a href=""><?php echo __('Internados',$idioma); ?></a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href=""><?php echo __('Campamentos',$idioma); ?></a></li>  
                                    <li role="separator" class="divider"></li>
                                    <li><a href=""><?php echo __('Material didáctico',$idioma); ?></a></li>  							
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo __('Descubre España',$idioma); ?><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><?php echo __('Lugares con encanto',$idioma); ?></a></li>
                                    <li><a href=""><?php echo __('Pequeños museos',$idioma); ?></a></li>							
                                    <li role="separator" class="divider"></li>
                                    <li><a href=""><?php echo __('Clases de cocina',$idioma); ?></a></li>
                                    <li><a href=""><?php echo __('Turismo del vino',$idioma); ?></a></li>       
                                </ul>
                            </li>									
                            <li><a href="wordpress/"><?php echo __('Actualidad',$idioma); ?></a></li>
                            <li><a href="registrarse.php"><?php echo __('Registrarse',$idioma); ?></a></li>      
                            <li><a href="iniciar_sesion.php"><?php echo __('Iniciar sesión',$idioma); ?></a></li>
                            
                        </ul> 	
                        <nav class="collapse navbar-collapse pull-right">
                            <form action="" method="POST">
                                <ul>
                                    <li id="banderas">
                                    <!-- El tipo "button" no hace que la página se recargue 
                                         a diferencia de los tipos "submit" y "reset"-->
                                        <button type="submit" class="bandera" name="espanol" value="esp">
                                                <img src="./images/flag_sp.png" />
                                        </button>
                                        <button type="submit" class="bandera" name="ingles" value="ing">
                                                <img src="./images/flag_uk.png" />
                                        </button>
                                        <button type="submit" class="bandera" name="frances" value="fra">
                                                <img src="./images/flag_fr.png" />
                                        </button>                                        
                                        <button type="submit" class="bandera" name="aleman" value="ale" onclick=funcion('ale')>
                                                <img src="./images/flag_de.png" />
                                        </button>
                                        <button type="submit" class="bandera" name="italiano" value="ita" onclick=funcion('ita')>
                                                <img src="./images/flag_it.png" />
                                        </button> 
                                        <button type="submit" class="bandera" name="ruso" value="rus" onclick=funcion('rus')>
                                                <img src="./images/flag_ru.png" />
                                        </button>                                        
                                    </li>
                                </ul>
                            </form>
                        </nav>          
                        <div class="collapse navbar-collapse pull-right">
                            <ul class="navbar-nav nav">
                                <li><a href="" id="idioma" >SSSS</a></li>
                            </ul>
                        </div>
                    </div> <!-- cabecera menú -->
                </div>
			</nav>
			
			<!-- Jumbotron con mensaje grande -->
			<div class="jumbotron blanco">
				<div class="container" id="subcontenedor">
					<div class="col-md-8">
						<h1><?php echo __('t_titulo',$idioma); ?></h1>
						<p><?php echo __('t_entrada',$idioma); ?></p>
						<p><a class="btn btn-primary btn-lg" href="#" role="button"><?php echo __('Saber más &raquo;',$idioma); ?></a></p>
					</div>
                    
                    
					 <div class="col-md-4">
                        <div class="flexslider">
                          <ul class="slides">
                            <li>
                              <img src="./images/foto_1.jpg" />
                              <p class="flex-caption">Capilla de Valleacerón</p>
                            </li>
                            <li>
                              <img src="./images/foto_2.jpg" />
                              <p class="flex-caption">Pinturas murales de Alarcón</p>
                            </li>
                            <li>
                              <img src="./images/foto_3.jpg" />
                              <p class="flex-caption">Metropol Parasol</p>
                            </li>
                            <li>
                              <img src="./images/foto_4.jpg"/>
                              <p class="flex-caption">Pagoda de Miguel Fisac</p>
                            </li>
                            <li>
                              <img src="./images/foto_1.jpg" id="foto_5"/>
                              <p class="flex-caption">Beato de Liébana</p>
                            </li>
                          </ul>
                        </div>               
					</div> 
				</div> <!-- COntainer -->
			</div> <!-- Jumbotron -->

			<div class="container">
				<!-- Example row of columns -->
				<div class="row">
			  
					<div class="col-md-4 blanco">
					  <h2><span class="glyphicon glyphicon-paperclip" id="talla"></span><?php echo __('Academias',$idioma); ?></h2>
					  <p><?php echo __('t_academias',$idioma); ?></p>
					  <p><a class="btn btn-default" href="#" role="button"><?php echo __('Saber más &raquo;',$idioma); ?></a></p>
					</div>
					
					<div class="col-md-4 blanco">
					  <h2><span class="glyphicon glyphicon-tent" id="talla"></span><?php echo __('Campamentos',$idioma); ?></h2>
					  <p><?php echo __('t_campamentos',$idioma); ?></p>
					  <p><a class="btn btn-default" href="#" role="button"><?php echo __('Saber más &raquo;',$idioma); ?></a></p>
                    </div>
				   
					<div class="col-md-4 blanco">
						<h2><span class="glyphicon glyphicon-home" id="talla"></span><?php echo __('Internados',$idioma); ?></h2>
						<p><?php echo __('t_internados',$idioma); ?></p>
						 <p><a class="btn btn-default" href="#" role="button"><?php echo __('Saber más &raquo;',$idioma); ?></a></p>
					</div>
					
					<div class="col-md-6 blanco">
						<h2><span class="glyphicon glyphicon-heart" id="talla"></span><?php echo __('Lugares con encanto',$idioma); ?></h2>
						<p><?php echo __('t_lugares',$idioma); ?></p>
						<p><a class="btn btn-default" href="#" role="button"><?php echo __('Saber más &raquo;',$idioma); ?></a></p>
					</div>
					
					<div class="col-md-6 blanco">
						<h2><span class="glyphicon glyphicon-book" id="talla"></span><?php echo __('Cultura',$idioma); ?></h2>
						<p><?php echo __('t_cultura',$idioma); ?></p>
						<p><a class="btn btn-default" href="#" role="button"><?php echo __('Saber más &raquo;',$idioma); ?></a></p>
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
	
        <!-- Animación del carrusel -->
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide"
                });
            });
        </script>
    
        <script>           
            $("#contenedor-global").css("height",$(window).height());
            $("#contenedor-global").css("width",$(window).width());          

        </script>

        <!-- Me daba problemas con el carrusel y por eso lo he puesto en comentario
        Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->

        <!-- Imprescindible para los submenús -->  
	    <script src="js/bootstrap.min.js"></script>
    </body>
</html>