<?php
// DTO que representa a la tabla usuarios
class Usuario
{
    // Atributos que corresponden con los campos de la tabla
    private $id;
    private $nombres;
    private $apellidos;
    private $direccion;
    private $email;
    private $password;
    private $id_rol;

    // Setter
    public function __set($nombre, $valor)
    {
        $this->$nombre = $valor;
    }

    // Getter
    public function __get($nombre)
    {
        return $this->$nombre;
    }

    // Constructor
    public function __construct()
    {
        
    }
}
