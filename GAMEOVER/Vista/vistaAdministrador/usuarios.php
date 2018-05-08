<?php
	require_once("../../dto/usuarios.php");
	ob_start();
	session_start();

	if (isset($_SESSION["admin"])) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Usuarios</title>

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
    <div class="container center">
        <h4 style="padding: 1rem 0;">Listado de usuarios</h4>
        <table class="striped centered responsive-table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Evaluando si existe variable de sesion con el arreglos de objetos personas
                    if (isset($_SESSION["usuarios"])) {
                        // Obteniendo listado de personas mediante variable de sesion
                        $admins = $_SESSION["usuarios"];
                        // Recorriendo cada DTO de personas para mostrarlos en la tabla
                        foreach ($admins as $registro) {
                    ?>
                    <tr>
                        <td><?=$registro->id; ?></td>
                        <td><?=$registro->nombres; ?></td>
                        <td><?=$registro->apellidos; ?></td>
                        <td><?=$registro->direccion; ?></td>
                        <td><?=$registro->email; ?></td>
                        <td><?=$registro->password; ?></td>
                        <td>
                            <a href="../controladores/controlador.php?user=modificar&id=<?=$registro->id; ?>" >Modificar</a>
                            <a href="../controladores/controlador.php?user=eliminar&id=<?=$registro->id; ?>" >Eliminar</a>
                        </td>
                    </tr>
                    <?php }
                    }; ?>
            </tbody>
        </table>
        <br><br>
        <a href="../../controladores/controladorUsuarios.php?user=agregar" class="waves-effect waves-light btn">Agregar persona</a>
</body>
</html>

<?php
	}
	else if(isset($_SESSION["cliente"]))
	{
		header("location: ../vistaCliente/principalCliente.php");
		exit;
	}
	else
	{
		header("location: ../login.php");
	}

?>