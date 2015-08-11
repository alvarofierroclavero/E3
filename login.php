 <?php
 
    session_start();
    
     //Conexión a la base de datos
    include("conexion_BD.php");
    
    //Caso de registro en la Base de Datos
    
    if($_POST[enviar] == "Registrarse") {
        //echo "1";
        $resultado='<div class="alert alert-success">Formulario enviado</div>';
        if(!$_POST[nombre]) {
            $error="<br />Por favor, introduzca el nombre";    
        }
        //echo "2";
        if(!$_POST[apellido]) {
            $error.="<br />Por favor, introduzca el apellido";    
        }
        //echo "3";
        if(!$_POST[correo]) {
            $error.="<br />Por favor, introduzca el correo";    
        }
        //echo "4";
        if(!$_POST[contrasena]) {
            $error.="<br />Por favor, introduzca la contraseña";    
        }
        //echo "5";
        if(!$_POST[comentario]) {
            $error.="<br />Por favor, introduzca el comentario";    
        }
        //echo "6:", $error;
        if($_POST[correo] !="" AND !filter_var($_POST[correo], FILTER_VALIDATE_EMAIL)) {
            $error.="<br />Correo incorrecto";
        }
        
        if($_POST[contrasena] !="" AND !preg_match("/[A-Z]/",$_POST[contrasena])) {
            $error.="<br />Por favor, introduzca contraseña con alguna mayuscula";
        }
        //echo "7:", $error;
        if($error) {
            $resultado='<div class="alert alert-danger"><strong>Hay errores en el formulario</strong>:'.$error.'</div>';
        } else {
            
 //Mandamos correo
            if(mail("alvarofierroclavero@gmail.com", 
                 "¡Comentario en E3!", 
                 " Nombre:".$_POST[nombre].
                 " Apellido:".$_POST[apellido].
                 " Correo:".$_POST[correo]. 
                 " Contrasena:".$_POST[contrasena].
                 " Comentario:".$_POST[comentario],
                 " From: e3@e3.com")) {
                     
                $resultado='<div class="alert alert-success">
                            <strong>Gracias</strong>. Responderemos pronto.</div>';
                            
                $peticion = "SELECT * FROM `usuarios` WHERE Correo='".mysqli_real_escape_string($basedatos,$_POST[correo])."'";
                //echo $peticion;
                $filas = mysqli_query($basedatos, $peticion);
                //echo $resultado;
                $num_filas = mysqli_num_rows($filas);
                //echo $resultados;                            
				if($num_filas) {
					$resultado='<div class="alert alert-danger"><strong>Ese correo ya está en la base de datos.</strong>:</div>';
				} else {
					
					$peticion = "INSERT INTO `usuarios` 
					                         (`nombre`, `apellidos`, `correo`, `contrasena`) 
											 VALUES
											 ('$_POST[nombre]', 
											 '$_POST[apellido]', 
											 '".mysqli_real_escape_string($basedatos,$_POST[correo])."', 
											 '".md5(md5($_POST[correo]).$_POST[contrasena])."')";				
					mysqli_query($basedatos,$peticion);
					$resultado='<div class="alert alert-success"><strong>Gracias</strong>. Se ha dado de alta en la Base de Datos.</div>';
					
                    //En el servidor almacenamos una variable que corresponde al índice autogenerado en la última petición
                    $_SESSION['id']=mysqli_insert_id($basedatos);
					
					// Redirigimos a la página de entrada
                    header("Location:index.php");                    
				}
				
            } else {
                $resultado='<div class="alert alert-danger">Error de envío, pruebe más tarde.</div>';
            }
        }
    }
    
    //Caso de acceso de socios
    
    if($_POST[enviar] == "Entrar") {
        $resultado='<div class="alert alert-success">Formulario enviado</div>';
        if(!$_POST[logincorreo]) {
            $error.="<br />Por favor, introduzca el correo";    
        }
        if(!$_POST[logincontrasena]) {
            $error.="<br />Por favor, introduzca la contraseña";    
        }
        if($_POST[logincorreo] !="" AND !filter_var($_POST[logincorreo], FILTER_VALIDATE_EMAIL)) {
            $error.="<br />correo incorrecto";
        }
        if($error) {
            $resultado='<div class="alert alert-danger"><strong>Hay errores en el formulario</strong>:'.$error.'</div>';
        } else {
            
//Mensaje de agradecimiento
        //        $resultado='<div class="alert alert-success">
        //                    <strong>Gracias</strong>. Responderemos pronto.</div>';
                            
//Comprobación en la base de datos                            
            
            $peticion = "SELECT * FROM usuarios WHERE correo='".mysqli_real_escape_string($basedatos,$_POST[logincorreo])."'";
            //echo ">",$_POST[logincorreo],">",$peticion;
            $filas = mysqli_query($basedatos, $peticion);            
            $num_filas = mysqli_num_rows($filas);
            //echo "-->",$num_filas,"<--";                            
			if($num_filas==0) {
				$resultado='<div class="alert alert-danger"><strong>No figuras en la base de datos</strong>, regístrate primero</div>';
            } else {
					
                // Empleamos la función mysqli_real_escape_string para evitar pirateo
                // La función md5 encripta la contraseña
                // En el campo de contraseña almacenamos el correo encriptado junto con la contraseña encriptada
                    
				$peticion = "SELECT * FROM usuarios WHERE 
                                           correo= 
                                           '".mysqli_real_escape_string($basedatos,$_POST[logincorreo])."' AND 
                                           contrasena=
											'".md5(md5($_POST[logincorreo]).$_POST[logincontrasena])."' 
                                            LIMIT 1";	
                //echo $_POST[logincorreo];
                //echo $_POST[logincontrasena];
                //echo $peticion;
				$filas=mysqli_query($basedatos,$peticion);
                $num_filas = mysqli_num_rows($filas);
                //echo "--->",$num_filas;
                if($num_filas ==0) {
                    $resultado='<div class="alert alert-danger"><strong>La contraseña es incorrecta</strong>, prueba de nuevo</div>';
                } else {
                    $fila = mysqli_fetch_array($filas);
                	$resultado='<div class="alert alert-success"><strong>Hola</strong>. Nos alegramos de verte por aquí, '.$fila['Nombre'].'</div>';
                    $_SESSION['id']=$fila['id'];
                    
                    // Tras el acceso correco, cargamos la página principal
                    header("Location:index.php");	 
                }  
            }
        }
    }
?> 
    
    
    
    