<?php
// Agregando scripts necesarios
require_once("IDao.php");
require_once("../ds/DataSource.php");
require_once("../dto/usuarios.php");


class usuarioDao implements IDao
{

	public function verificarUsuario($user)
	{
        // Creando objeto del DataSource
        $conexion = new DataSource();
        // Conectando y comprobando conexion
        if (!$conexion->conectar()) {
            echo "La conexion fallo";
            exit;
        } else {
            // Variable que contendra la respuesta de la verificacion
            $valido = 0;
            // Variable con llamada al procedimiento almacenado
            $sql = "CALL verificarUsuario(?)";
            // Preparando sentencia y evaluando preparacion
            if ($stmt = $conexion->preparar($sql)) {
                // Asignando variables para enviar como parametros al SP
                $stmt->bind_param("s", $email);
                // Obteniendo valores del objeto y asignandolos a las variables
                $email = $user->email;
                // Ejecutando sentencia
                $stmt->execute();
                // Vinculando variables a los campos de la tabla
                $stmt->bind_result($password,$rol);
                // Evaluando existencia de registros e iterando cada uno

                if ($stmt->fetch()) {
                    //  Evaluando si el password devuelto es igual al que contiene el DTO
                    if ($user->password==$password) {
                        if($rol=="administrador")
                        {
                            $valido = 1;
                        }
                        else
                        {
                            $valido = 2;
                        }
                    }
                }
                // Cerrando conexiones y liberando recursos
                $stmt->close();
                $conexion->desconectar();
                // Retornando arreglo con los empleados
                return $valido;
            } else {
                // Cerrando conexiones y liberando recursos
                $conexion->desconectar();
                echo "Ocurrio un error al llamar al PS";
                exit;
            }
        }
	}

	public function mostrarA()
    {
        
        // Creando objeto del DataSource
        $conexion = new DataSource();
        // Conectando y comprobando conexion
        if (!$conexion->conectar()) {
            echo "La conexion fallo";
            exit;
        } else {
            // Variable que contendra objeto DTO
            $usuario = null;
            // Arreglo que contendra los objetos DTO
            $usuarios = array();
            // Variable con llamada al procedimiento almacenado
            $sql = "CALL mostrarAdmin()";
            // Preparando sentencia y evaluando preparacion
            if ($stmt = $conexion->preparar($sql)) {
                // Ejecutando sentencia
                $stmt->execute();
                // Vinculando variables a los campos de la tabla
                $stmt->bind_result($id, $nombre, $apellido, $direccion, $email, $pass);
                // Evaluando existencia de registros e iterando cada uno
                while ($stmt->fetch()) {
                    $usuario = new Usuario();
                    $usuario->id = $id;
                    $usuario->nombres = $nombre;
                    $usuario->apellidos = $apellido;
                    $usuario->direccion = $direccion;
                    $usuario->email = $email;
                    $usuario->password = $pass;
                    // Agregando el objeto al arreglo personas
                    array_push($usuarios, $usuario);
                }
                // Cerrando conexiones y liberando recursos
                $stmt->close();
                $conexion->desconectar();
                // Retornando arreglo
                return $usuarios;
            } else {
                // Cerrando conexiones y liberando recursos
                $conexion->desconectar();
                echo "Ocurrio un error al llamar al PS";
                exit;
            }
        }
    }

    public function mostrarU()
    {
        
        // Creando objeto del DataSource
        $conexion = new DataSource();
        // Conectando y comprobando conexion
        if (!$conexion->conectar()) {
            echo "La conexion fallo";
            exit;
        } else {
            // Variable que contendra objeto DTO
            $usuario = null;
            // Arreglo que contendra los objetos DTO
            $usuarios = array();
            // Variable con llamada al procedimiento almacenado
            $sql = "CALL mostrarUser()";
            // Preparando sentencia y evaluando preparacion
            if ($stmt = $conexion->preparar($sql)) {
                // Ejecutando sentencia
                $stmt->execute();
                // Vinculando variables a los campos de la tabla
                $stmt->bind_result($id, $nombre, $apellido, $direccion, $email, $pass);
                // Evaluando existencia de registros e iterando cada uno
                while ($stmt->fetch()) {
                    $usuario = new Usuario();
                    $usuario->id = $id;
                    $usuario->nombres = $nombre;
                    $usuario->apellidos = $apellido;
                    $usuario->direccion = $direccion;
                    $usuario->email = $email;
                    $usuario->password = $pass;
                    // Agregando el objeto al arreglo personas
                    array_push($usuarios, $usuario);
                }
                // Cerrando conexiones y liberando recursos
                $stmt->close();
                $conexion->desconectar();
                // Retornando arreglo
                return $usuarios;
            } else {
                // Cerrando conexiones y liberando recursos
                $conexion->desconectar();
                echo "Ocurrio un error al llamar al PS";
                exit;
            }
        }
    }
    
    public function mostrar()
    {
        # code...
    }

    public function agregar($objeto)
    {
        // Creando objeto del DataSource
        $conexion = new DataSource();
        // Conectando y comprobando conexion
        if (!$conexion->conectar()) {
            echo "La conexion fallo";
            exit;
        } else {
            // Variable que contendra objeto DTO pasado como parametro
            $admin = $objeto;
            // Variable con llamada al procedimiento almacenado
            $sql = "CALL agregarAdmin(?, ?)";
            // Preparando sentencia y evaluando preparacion
            if ($stmt = $conexion->preparar($sql)) {
                // Asignando variables para enviar como parametros al SP
                $stmt->bind_param("ss", $email, $password);
                // Obteniendo valores del objeto y asignandolos a las variables
                $email = $admin->email;
                // Encriptando el password del usuario
                $password = password_hash($admin->password, PASSWORD_DEFAULT);
                // Ejecutando sentencia
                $stmt->execute();
                // Obteniendo cantidad de registros afectados
                $registros = $stmt->affected_rows;
                // Cerrando conexiones y liberando recursos
                $stmt->close();
                $conexion->desconectar();
                // Retornando cantidad de registros afectados
                return $registros;
            } else {
                // Cerrando conexion y liberando recursos
                $conexion->desconectar();
                echo "Ocurrio un error al llamar al PS";
                exit;
            }
        }
    }

}
?>