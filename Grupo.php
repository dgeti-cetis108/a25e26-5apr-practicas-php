<?php

class Grupo {
    public $Semestre = null;
    public $Letra = '';
    public $Carrera = null;
    public $Periodo = '';
    public $Alumnos = [];

    public function Nombre(): string {
        return $this->Semestre . $this->Letra . $this->Carrera->NombreCorto;
    }
}