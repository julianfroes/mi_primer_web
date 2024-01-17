<?php
include('db.php');
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$user="root";
$pass="";
$server="localhost";
$db="login";
$conexion=mysqli_connect($server,$user,$pass,$db);


$insertar="INSERT INTO usuariosclientes Values ('','$correo','$usuario','$contraseña','user') ";


$query=mysqli_query($conexion,$insertar);

if($query){

    ob_start();

    
    include("pdogos.html");

}else{
    ?>
    <?php
    include("Registro.html");

  ?>
  <h1 class="bad">ERROR DE REGISTRO</h1>
  <?php
}
mysqli_free_result($query);
mysqli_close($conexion);
