<?php
/*
    Identificadores
    Reglas generales PSR-1 (PHP Standards Recommendation)
    - caracteres validos: a-z A-Z 0-9 _
    - no pueden iniciar con un número
    - sensible a MAYÚSCULAS y minúsculas nombre!=Nombre
    - no utilizar palabras reservadas
    Convenciones
    - variables: debe iniciar con $ nomenclatura snake_case
    - constantes: se utilizan en MAYÚSCULAS
    - clases: nomenclatura PascalCase
*/

$nombre = "bidkar";
$edad = 45;
$estatura = 1.8;

// $1peso = 0; error: no puede iniciar con número el nombre
$_numero_de_control = true;
$grupo_letra = 'A';

echo "hola $nombre<br>";
echo 'hola '.$nombre;
