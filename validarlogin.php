<?php
include('db.php');
define('nombreusuario','tipousuario');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
ob_start();
$_SESSION['usuario']=$usuario;

$user="root";
$pass="";
$server="localhost";
$db="login";
$conexion=mysqli_connect($server,$user,$pass,$db);


$consulta="SELECT*FROM usuariosclientes where Usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['usuario']=$usuario;
    include("pdogos.html");

}else{
    ?>
    <?php
    include("Registro.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}


mysqli_free_result($resultado);
mysqli_close($conexion);
