<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrarse</title>
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
		<div class="row" align="center">
			<div class="col s12">
				<i class="log fab fa-reddit"></i>
				<h4 align="center">Registrarse</h4>
			</div>
		</div>
		<!--FORMULARIO-->
		<form action="recepcion.php" method="post">
			<div class="row">
				<div class="input-field col s6">
		        <input id="nombres" type="text" placeholder="Nombres" class="validate" name="nombres" autofocus required>
		        <label for="nombres">Nombres</label>
		        </div>

		        <div class="input-field col s6">
		        <input id="apellidos" type="text" placeholder="Apellidos" class="validate" name="apellidos" required>
		        <label for="apellidos">Apellidos</label>
		        </div>
			</div>

			<div class="row">
		    	<div class="col s12">
				<input type="submit" value="Ingresar" class="enviar"> 
				</div>
				<div class="col s12">
				<input type="reset" value="Cancelar" class="enviar"> <br>
				</div>
			</div>
				
			<p class="center">¿Ya tienes cuenta? dale <a href="login.php"> click aquí </a> para iniciar sesión</p>
			<p class="center">GAME OVER © 2018</p>
		</form>
</body>
</html>