<?php

include 'conecxion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="diseño.css">
</head>
<body>
    <center>
    <div class="div">
<span><h1>Modificar Datos</h1></span>
            <br>
            <?php

$id=$_REQUEST['id'];

$query="SELECT*FROM registro WHERE id='$id'";
$resultado= $conec->query($query);
$filas=$resultado->fetch_assoc();


?>
    
          <form class="form" action="proceso.php?id=<?php echo $filas['id']; ?>" method="POST">
          <label>Nombres</label>
              <input type="text" id="nombre"  name="nombre" value="<?php echo $filas['nombre']; ?>"><br>

              <label>Correo</label>
              <input type="text" id="apellido" name="apellido" value="<?php echo $filas['apellido']; ?>"><br>

              <label>Telefono</label>
              <input type="number" id="documento" name="documento" value="<?php echo $filas['documento']; ?>" ><br>

              <label>Usuario</label>
              <input type="number" id="edad" name="edad" value="<?php echo $filas['edad']; ?>" ><br>

              <br>
              <button type="submit">Guardar</button>
              
          </form> 
          </div> 
          </center>
</body>
</html>