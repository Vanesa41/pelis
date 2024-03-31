<?php
include "conexion.php";
$btE = $_GET ['btE'];
$nombre = $_GET ['nombre'];
$director = $_GET ['director'];
$resena = $_GET ['resena'];
$genero = $_GET ['genero'];
$estreno = $_GET ['estreno'];
$clasificacion = $_GET ['clasificacion'];
$protagonista = $_GET ['protagonista'];
$productora = $_GET ['productora'];
$cartel = $_GET ['cartel'];
$id = $_GET ['id'];

//echo "$btE <br> $nombre <br> $director <br> $resena <br> $genero <br> $estreno <br> $clasificacion 
//<br> $protagonista <br> $productora <br> $cartel";

switch ($btE){
    case 'REGISTRAR':
        $sql = "insert into pelicula values (null,'$nombre','$director','$resena','$genero',
        '$estreno','$clasificacion','$protagonista','$productora','../img/$cartel')";
        $conn->query($sql);
        break;

        case 'MODIFICAR':
        $sql= "UPDATE pelicula set titulo_pelicula='$nombre', director='$director', resena='$resena',
        genero='$genero', fecha_estreno='$estreno', clasificacion='$clasificacion',
        protagonista='$protagonista', casa_productora='$productora' where id_pelicula = $id ";
        $conn->query($sql);
        break;

        case 'ELIMINAR':
        $sql= "DELETE from pelicula WHERE id_pelicula=$id";
        $conn->query($sql);
        break;

}//switch

header("location:mostrar_pelicula.php");