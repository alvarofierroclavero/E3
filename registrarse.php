<?php
    session_start();
       
    //Comprobaciones de entrada
    include("login.php");
    

?>



<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Álvaro Fierro">
	<meta name="description" content="Página para Español En España">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registrarse</title>
	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
    
        .formulario_correo {
            border:1px solid grey;
            border-radius:10px;
            margin-top:20px;
        }
        
        .aviso {
            font-size:0.8em
            font-color:green;
        }
        
        .boton {
            margin-top:15px;
        }
        
        textarea {
            height:120px;
        }
			
	</style>
	
  </head>
  <body>
  
	<div class="navbar navbar-inverse">
	
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Español en España</a>  
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				
				<span class="sr-only">Navegación</span>
				
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				
			</div> <!-- cabecera navbar derecha -->
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				
					<li><a href="nosotros.html">Nosotros</a></li>
				
					<li><a href="">Formación</a></li>
					
					<li><a href="">Camps</a></li>
					
					<li><a href="">Cultura</a></li>
					
					<li><a href="wordpress/">Blog</a></li>

                    <li class="active"><a href="registrarse.php">Registrarse</a></li>
                    
                    <li><a href="iniciar_sesion.php">Iniciar sesión</a></li>				
				</ul>
			</div> <!-- cabecera menú -->
					
		</div>
	</div>


    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 formulario_correo">
                <h1>Solicitud de Suscripción</h1>
                <?php echo $resultado; ?>
                <p class="lead">Nos pondremos en contacto enseguida</p>
                <form method="post">
                    <div class="form-group">
                        <label form="nombre">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="<?php echo addslashes($_POST[nombre]); ?>"/>
                        <label form="apellido">Apellidos</label>
                        <input name="apellido" type="text" class="form-control" placeholder="Apellidos" value="<?php echo addslashes($_POST[apellido]); ?>"/>             
                        <label form="correo">Correo</label>
                        <input name="correo" type="email" class="form-control" placeholder="Correo" value="<?php echo addslashes($_POST[correo]); ?>"/> 
                        <label form="contrasena">Contraseña</label>
                        <input name="contrasena" type="password" class="form-control" placeholder="Contraseña" value="<?php echo addslashes($_POST[contrasena]); ?>"/>    
                        <label form="comentario">Comentario</label>
                        <textarea name="comentario" type="text" class="form-control"/></textarea>
                        <input type="submit" name="enviar" class="btn btn-success btn-lg boton" value="Registrarse"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>
