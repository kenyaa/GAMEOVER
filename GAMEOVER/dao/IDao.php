<?php
// Interfaz DAO para ser implementada por varios DAO
interface IDao
{
    public function mostrar();
    public function agregar($objeto);
    /*
    public function modificar($objeto);
    public function eliminar($objeto);
    public function mostrarD($objeto);*/
}