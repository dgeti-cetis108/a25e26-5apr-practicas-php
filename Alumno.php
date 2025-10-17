<?php

// POO: Definir una clase para Alumnos

class Alumno
{
    public $Nombre = '';
    public $Apellidos = '';

    public function nombreCompleto(): string
    {
        return $this->Nombre . ' ' . $this->Apellidos;
    }
}