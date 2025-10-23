<?php
// include y require
require 'Alumno.php';
require 'Carrera.php';
require 'Grupo.php';

echo '<h1>Proyecto no estandarizado</h1>';

$alumno = new Alumno();
$alumno->Nombre = 'Magdiel';
$alumno->Apellidos = 'Peral';

echo "<b>Hola {$alumno->nombreCompleto()}</b>";

$alumno2 = new Alumno();
$alumno2->Nombre = 'Cesar';
$alumno2->Apellidos = 'Pollorena';

$alumno3 = new Alumno();
$alumno3->Nombre = 'Ignacio';
$alumno3->Apellidos = 'Valencia';

// crear una carrera
$carrera = new Carrera();
$carrera->NombreCorto = 'PR';
$carrera->Nombre = 'Programación';
$carrera->PlanDeEstudios = 2023;

// crear un grupo
$grupo = new Grupo();
$grupo->Semestre = 5;
$grupo->Letra = 'A';
$grupo->Periodo = '2025-1';
$grupo->Carrera = $carrera;

// agregar alumnos al grupo
array_push($grupo->Alumnos, $alumno, $alumno2, $alumno3);


echo '<hr>';
echo "<h2>Grupo: {$grupo->Nombre()}</h2>";
echo "Carrera: {$grupo->Carrera->Nombre}, Plan de estudios: {$grupo->Carrera->PlanDeEstudios}";

echo '<table>';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Nombre(s)</th>';
            echo '<th>Apellido(s)</th>';
        echo '</tr>';
    echo '</thead>';

    echo '<tbody>';
        foreach ($grupo->Alumnos as $item) {
            echo '<tr>';
                echo "<td>{$item->Nombre}</td>";
                echo "<td>{$item->Apellidos}</td>";
            echo '</tr>';
        }
    echo '</tbody>';
echo '</table>';
