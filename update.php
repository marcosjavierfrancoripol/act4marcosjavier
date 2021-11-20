<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="UPDATE cliente SET  apellido='$apellido',edad='$edad',telefono='$telefono',email='$email' WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientehotel.php");
    }
?>