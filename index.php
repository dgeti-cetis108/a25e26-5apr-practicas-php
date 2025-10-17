<?php
// include y require
require 'Alumno.php';

echo '<h1>Proyecto no estandarizado</h1>';

$alumno = new Alumno();
$alumno->Nombre = 'Magdiel';
$alumno->Apellidos = 'Peral';

echo "<b>Hola {$alumno->nombreCompleto()}</b>";
