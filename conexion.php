<?php
$servidor = 'localhost';
$base = 'peliculas';
$usuario = 'root';
$contrasena = '';
$puerto = '3306';

$conn = mysqli_connect ($servidor, $usuario, $contrasena, $base);

if (!$conn) {
    die("Error en la conexión: ".mysqli_connect_error());
}
//echo "conexión exitosa";

