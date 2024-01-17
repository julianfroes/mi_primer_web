<?php
include('db.php');
$ID=$_POST['txtID'];
$Direccion=$_POST['txtDireccion'];
$NombreP=$_POST['txtNombreP'];
$Descripcion=$_POST['txtDescripcion'];
$Precio=$_POST['txtPrecio'];

$user="root";
$pass="";
$server="localhost";
$db="login";
$conexion=mysqli_connect($server,$user,$pass,$db);

$consulta="UPDATE `productos` SET `Direccion`='$Direccion',`NombreP`='$NombreP',
`Descripcion` = '$Descripcion', `Precio`='$Precio' WHERE `ID`='$ID'";
mysqli_query($conexion,$consulta);

mysqli_close($conexion);
header("location:Pedidos2.php");


?>