<?php
include('db.php');
$Direccion=$_POST['txtDireccion'];
$NombreP=$_POST['txtNombreP'];
$Descripcion=$_POST['txtDescripcion'];
$Precio=$_POST['txtPrecio'];

$user="root";
$pass="";
$server="localhost";
$db="login";
$conexion=mysqli_connect($server,$user,$pass,$db);


$consulta="INSERT INTO `productos`(`ID`, `Direccion`, `NombreP`, `Descripcion`, `Precio`) VALUES  (NULL,'$Direccion','$NombreP','$Descripcion','$Precio')";
mysqli_query($conexion,$consulta);

mysqli_close($conexion);
header("location:Pedidos2.php");


?>