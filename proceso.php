<?php
include "conecxion.php";

$id=$_REQUEST['id'];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$documento = $_POST["documento"];
$edad = $_POST["edad"];


$query ="UPDATE registro SET nombre='$nombre', apellido='$apellido', documento='$documento', edad='$edad' WHERE id='$id'";
$resultado= $conec->query($query);

if($resultado){
    header("location: busqueda.php");
}
else{
    echo "Insercion no exitosa";
}


?>