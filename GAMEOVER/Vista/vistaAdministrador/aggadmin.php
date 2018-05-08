<?php
	ob_start();
	session_start();

	if (isset($_SESSION["admin"])) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Agregar administradores</title>

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
	<?php  require_once("../template/navA.php") ?>
    <div class="container">
      <h4 style="padding: 1rem 0;">Agregar administradores</h4>
        <form action="../../controladores/controladorAdmin.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="icon_prefix" type="text" name="email" class="validate" required>
                <label for="icon_prefix">Email:</label>
              </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="icon_prefix" type="text" name="password" class="validate" required>
                <label for="icon_prefix">Password:</label>
              </div>
        </div>
            <button type="submit" name="enviar" class="btn btn-primary">Agregar</button><br>
        </form>
        </div>
    </div>
</body>
</html>

</body>
</html>

<?php
	}
	else if(isset($_SESSION["cliente"]))
	{
		header("location: vistaCliente/principalCliente.php");
		exit;
	}
	else
	{
		header("location: ../login.php");
	}

?>