<?php

 include 'conecxion.php';
 include 'registro.php';
 
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
    <h1>Bienvenido</h1>
    <div class="div">
  <center>
  <h1>Registrarse</h1>
 
  <form class="form" action=""  method="post">
  
    <input type="text" id="nombres" name="nombres" placeholder="Nombre" required >
    
    <input type="text" id="apellidos" name="apellidos" placeholder="Apellido" required/> 
     
    <input type="text" id="documentos" name="documentos" placeholder="Documento" required >

    <input type="text" id="edad" name="edad" placeholder="Edad" required >
      
    <input type="submit" value="Registrarse" name="registrarse">
   
  </form>

</div>
  <div class="opciones">
   
      <a href="busqueda.php">Busqueda usuario</a> 
   
  </div>
  </center>
</body>
</html>