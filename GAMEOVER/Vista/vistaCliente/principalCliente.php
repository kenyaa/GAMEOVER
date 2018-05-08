<?php
	ob_start();
	session_start();


	if (isset($_SESSION["admin"])) {
		header("../vistaAdministrador/principalAdmin.php");
	}
	else if (isset($_SESSION["cliente"])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Página principal - CLIENTE</title>

  <!-- CSS  -->
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/fontawesome-all.js"></script>
</head>

<?php
	require_once("../template/body.php");
	}
	else
	{
		header("../../index.php");
	}
	ob_end_flush();
?>
