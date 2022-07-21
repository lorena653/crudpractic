<?php
include 'conecxion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
<a href="index.php">volver</a>
    <center>
    <br>
    <table class="tabla">
     <thead>
         <th>ID</th>
         <th>Nombres</th>
         <th>Apellidos</th>
         <th>Documento</th>
         <th>Edad</th>
         
     </thead>
     <?php
    
    $sql= "SELECT * FROM `registro`";
    $result=mysqli_query($conec, $sql);

    while($filas=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
            echo "<td>"; echo $filas['id']; echo "</td>";
            echo "<td>"; echo $filas['nombre']; echo "</td>";
            echo "<td>"; echo $filas['apellido']; echo "</td>";
            echo "<td>"; echo $filas['documento']; echo "</td>";
            echo "<td>"; echo $filas['edad']; echo "</td>";

            echo "<td> <a href='modificar.php?id=".$filas['id']."'><button type='button'>Modificar</button></a> </td>";
            echo "<td> <a href='eliminar.php?id=".$filas['id']."''><button type='button'>Eliminar</button></a> </td>"; 
        echo "</tr>";
    }
     ?>
    </table>
    </center>
</body>
</html>