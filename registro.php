<?php
if(isset($_POST['registrarse'])){
include 'conecxion.php';

$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$documento = $_POST["documentos"];
$edad = $_POST["edad"];

$insertar ="INSERT INTO `registro`(`nombre`, `apellido`, `documento`, `edad`) VALUES ('$nombre','$apellido','$documento','$edad')";

$resultado = mysqli_query($conec, $insertar);

mysqli_close($conec);
}
?>