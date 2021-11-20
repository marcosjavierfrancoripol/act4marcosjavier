<?php

include("conexion.php");
$con=conectar();

$nombre=$_GET['nombre'];

$sql="DELETE FROM cliente  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientehotel.php");
    }
?>
