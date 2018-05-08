<?php
	ob_start();
	session_start();

	if (isset($_SESSION["admin"])) {
		header("location: vistaAdministrador/principalAdmin.php");
		exit;
	}
	else if(isset($_SESSION["cliente"]))
	{
		header("location: vistaCliente/principalCliente.php");
		exit;
	}
	else
	{
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/materialize.min.css" media="screen,projection">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
	    <script type="text/javascript" src="../js/materialize.min.js"></script>
	    <script src="../js/fontawesome-all.js"></script>
	</head>
<body>
	<div class="contenedor">
		<br>
		<br>
		<div class="row" align="center">
			<div class="col s12">
				<i class="log fab fa-reddit"></i>
				<h4 align="center">Bienvenidos</h4>
			</div>
		</div>
		<!--FORMULARIO-->
		<form action="../controladores/controladorUsuario.php" method="post">
			<div class="row">
		    	<div class="input-field col s12">
		          <i class="fas fa-user icons prefix"></i>
		          <input id="icon_prefix" type="text" name="email" class="validate" required>
		          <label for="icon_prefix">Usuario</label>
		        </div>
			</div>

			<div class="row">
		    	<div class="input-field col s12">
		          <i class="fas fa-unlock-alt icons prefix"></i>
		          <input id="icon_prefix" type="text" name="password" class="validate" required>
		          <label for="icon_prefix">Password</label>
		        </div>
			</div>

			<div class="row">
		    	<div class="col s12">
				<input type="submit" value="Ingresar" class="enviar" name="enviar"> 
				</div>
				<div class="col s12">
				<input type="reset" value="Cancelar" class="enviar"> <br>
				</div>
			</div>
				
			<p class="center">¿No tienes cuenta? dale <a href="registrarse.php"> click aquí </a> para registrarte</p>
			<p class="center">GAME OVER © <?=date('Y'); ?></p>
		</form>
	</div>
</body>
</html>


<?php
	ob_end_flush();
	}
?>