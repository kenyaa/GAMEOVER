<?php
// Indicando manejo de sesiones
ob_start();
session_start();

# Verificaciones para determinar acciones a tomar

// Evaluando si tenemos sesion activa
if (isset($_SESSION["admin"])) {

    if (isset($_GET["cerrar"]) && $_GET["cerrar"] == "true") 
    {
        // Cerrando sesion
        cerrarSesion();
    } 
    else if (isset($_POST["enviar"])) 
    {
        agregarUsuario();

    }
    else if(isset($_GET["admin"]) && $_GET["admin"] == "agregar") 
    {
        aeAdmin();
    }
    else if(isset($_GET["admin"]) && $_GET["admin"] == "leer") 
    {
        // En el caso de mostrar personas
        mostrarAdmin();
    } 

    else if(isset($_GET["user"]) && $_GET["user"] == "agregar") 
    {
        aeUsuario();
    }
    else if(isset($_GET["user"]) && $_GET["user"] == "leer") 
    {
        // En el caso de mostrar personas
        mostrarUsuario();
    } 

} 
else if (isset($_POST["enviar"])) {
    // En el caso de ingresar al sistema
    ingresar();
}
else {
    // Enviando al usuario el login
    login();
}






//METODOS

function aeUser()
{
    header("Location: ../Vista/vistaAdministrador/aggadmin.php");
    exit;
}

/*function agregarUsuario()
{

    require_once("../dao/usuarioDao.php");
    $user = new Usuario();
    $user->email = $_POST["email"];
    $user->password = $_POST["password"];
    $user = new adminDao();
    if ($adminDa->agregar($admin) > 0) {
        // En caso que se haya agregado correctamente la persona
        mostrarAdmins();
    } else {
        // En caso de falla al agregar la persona
        header("Location: ../Vista/vistaAdministrador/aggadmin.php");
        exit;
    }
}*/

function mostrarAdmin()
{

    require_once("../dao/usuarioDao.php");
    $usuarioDao = new usuarioDao();
    // Guardando el listado en una variable de sesion
    $_SESSION["administradores"] = $usuarioDao->mostrarA();
    header("Location: ../Vista/vistaAdministrador/admins.php");
    exit;
}

function mostrarUsuario()
{

    require_once("../dao/usuarioDao.php");
    $usuarioDao = new usuarioDao();
    // Guardando el listado en una variable de sesion
    $_SESSION["usuarios"] = $usuarioDao->mostrarU();
    header("Location: ../Vista/vistaAdministrador/usuarios.php");
    exit;
}

function login()
{
    header("Location:../Vista/login.php");
    exit;
}

function cerrarSesion()
{
    session_destroy();
    login();
}

function ingresar()
{
    // Haciendo uso del DTO y DAO para comprobar credenciales del usuario
    require_once("../dao/usuarioDao.php");
    $user = new Usuario();
    $user->email = $_POST["email"];
    $user->password = $_POST["password"];
    $usuarioDao = new usuarioDao();
    if ($usuarioDao->verificarUsuario($user)==1) 
    {
        $_SESSION["admin"] = $user->email;
        mostrarPrincipalU();
    }
    else if($usuarioDao->verificarUsuario($user)==2)
    {
        $_SESSION["cliente"] = $user->email;
        mostrarPrincipalC();
    }
    else {
        login();
    }
}

function mostrarPrincipalU()
{
    header("location: ../Vista/vistaAdministrador/principalAdmin.php");
    exit;
}
function mostrarPrincipalC()
{
    header("location: ../Vista/vistaCliente/principalCliente.php");
    exit;
}

ob_end_flush();
?>