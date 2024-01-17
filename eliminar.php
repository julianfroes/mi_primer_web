<?php

include('db.php');
$NombreP=$_POST['NombreP'];

$user="root";
$pass="";
$server="localhost";
$db="login";
$conexion=mysqli_connect($server,$user,$pass,$db);

$consulta="DELETE FROM productos where NombreP='$NombreP'";
mysqli_query($conexion,$consulta);
echo($_POST['NombreP']);

mysqli_close($conexion);
header("location:Pedidos2.php");

?>