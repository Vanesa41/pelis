<?php
    include "conexion.php";
    $sql = "select * from pelicula where id_pelicula=".$_GET['id_pelicula'];

    $stm = $conn->query($sql);
    $fila = $stm->fetch_array(); //convierte a php
    $clasificacion = $fila

?>

<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pelicula</title>
    <link href="..//img/ICO3.ico" rel="short-cut icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilopelicula.ccs"> 
</head>
<body class = "fondo">
    <main class="container bg-white my-3" style="height: 700px;">
    <center><h4>EDITAR PELÍCULA</h4></center>
    <form method="get" action="crud.php">
        <input type="hidden" name="id" value="<?php echo $_GET ['id_pelicula'] ?>">
        <fieldset>
            <table style="width: 300px; margin: auto;">
        <tr>
            <td><br>Nombre</td>
            <td>
                <br><input value="<?php echo $fila['titulo_pelicula']?>" name="nombre" type="text">
            </td>
        </tr>
        <tr>
            <td><br>Director</td>
            <td>
                <br><input name="director" type="text">
            </td>
        </tr>
        <tr>
            <td><br>Reseña</td>
            <td>
                <br><textarea name="resena" cols="15" rows="5" class="form-control"></textarea>
            </td>
        </tr>
        <tr>
            <td><br>Genero</td>
            <td>
                <br><select name="genero">
                    <option><?php echo $fila['genero']?></option>
                    <option>Acción</option>
                    <option>Aventura</option>
                    <option>Catástrofe</option>
                    <option>Ciencia Ficción</option>
                    <option>Comedia</option>
                    <option>Documentales</option>
                    <option>Drama</option>
                    <option>Fantasía</option>
                    <option>Musical</option>
                    <option>Suspenso</option>
                    <option>Terror</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><br>Estreno</td>
            <td>
                <br><input name="estreno" type="date">
            </td>
        </tr>
        <tr>
            <td><br>Clasificación</td>
            <td>
                <br><select name="clasificacion">
                    <option><?php echo $fila['clasificacion']?></option>
                    <option>U (Para todo público)</option>
                    <option>PG (Con supervisión de los padres)</option>
                    <option>12A (Mayores de 12 años)</option>
                    <option>15 (Mayores de 15 años)</option>
                    <option>18 (Mayores de 18 años)</option>
                    <option>R-18 (Restringido y para mayores de 18 años)</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><br>Protagonista</td>
            <td>
                <br><input name="protagonista" type="text">
            </td>
        </tr>
        <tr>
            <td><br>Productora</td>
            <td>
                <br><select name="productora">
                    <option>Columbia Pictures</option>
                    <option>Warner Bros</option>
                    <option>Paramount Pictures</option>
                    <option>Universal Pictures</option>
                    <option>Disney</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><br>Cartel</td>
            <td>
                <br><input name="cartel" type="text">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <br><input name="btE" type="submit" value="MODIFICAR" class="btn btn-primary">
                    <input name="btE" type="submit" value="ELIMINAR" class="btn btn-danger">
            </td>
        </tr>
    </table>
    </fieldset>
    </form>
</main>
</body>
</html>