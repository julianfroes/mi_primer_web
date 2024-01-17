<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$server = "localhost";
$user = "root";
$password = "";
$database = "login";
$conexion=mysqli_connect($server,$user,$password,$database);
$consulta="SELECT*FROM usuariosclientes where usuario='$usuario'and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    header("location:pdogos.html");
}else{
    ?>
    <?php
    include("Registro.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);