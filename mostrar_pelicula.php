<?php
include "conexion.php"
?>
<!DOCTYPE html>
<html lang>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Película</title>
    <link href="..//img/ICO3.ico" rel="short-cut icon">
    <link rel="stylesheet" href="../css/estilopelicula.ccs"> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
    </style>
</head>
<body class="fondo">
    <main class="container my-3">
        <center><h1>CARTELERA</h1>
        <br>
        <a href="alta_pelicula.html" class="btn btn-success">REGISTRAR PELÍCULA</a></center> <br>

        <?php
        $sql="SELECT * from pelicula";
        $rs=$conn ->query($sql); //result set

        $i=1;
        while($fila = $rs->fetch_array()){
            if ($i==1)
            echo "<div class='row justify-content-center my-3'>";
        ?>

        <div class="card mx-3" style="width: 18rem;">
            <img src="<?php echo $fila ['cartel'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $fila ['titulo_pelicula'] ?></h5>
                <p class="card-text"><?php echo $fila ['resena'] ?></p>
                <a href="editar_pelicula.php?id_pelicula=<?php echo $fila['id_pelicula']?>" class="btn btn-primary">VER</a>
            </div>
        </div>
        <?php

        if ($i==3){
            echo "</div>";
            $i=0;
        }
        $i++;
        
             }//while
        ?>
    </main>
</body>
</html>