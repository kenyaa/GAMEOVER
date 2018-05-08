<?php
	ob_start();
	session_start();


	if (isset($_SESSION["cliente"])) {
		header("location: ../vistaCliente/principalCliente.php");
	}
	else if (isset($_SESSION["admin"])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Página principal - Administrador</title>

  <!-- CSS  -->
  <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../js/materialize.js"></script>
  <script src="../../js/init.js"></script>
  <script src="../../js/fontawesome-all.js"></script>
</head>
<body>
	<!-- BARRA DE NAVEGACIÓN -->
	<?php  require_once("../template/navA.php") ?>
    <div class="dash">
    	<div class="container">
    		<div class="row">
				<div class="col s12">
					<h2>Bienvenido <?php echo $_SESSION["admin"]; ?>!</h2>
         		   <p>Sistema de administración de Game Over Store</p>
				</div>
			</div>
    	</div>
    </div>


</body>
<?php
	}
	else
	{
		header("location: ../login.php");
	}
	ob_end_flush();
?>