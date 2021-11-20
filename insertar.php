<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];

$sql="INSERT INTO cliente VALUES('$nombre','$apellido','$edad','$telefono','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: clientehotel.php");
    
}else {
}
?>