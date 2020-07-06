<?php
include "cn.php";
error_reporting(0);
$nombre1=$_POST["nombre1"];
$correo1=$_POST["correo1"];
$mensaje=$_POST["mensaje"];


$insert="INSERT INTO contactanos(nombre_us,correo_us,mensaje_us) values('$nombre1','$correo1','$mensaje')";
$result=mysqli_query($conexion,$insert);

if($result!=0)
{
    echo"<script>alert('mensaje enviado con exito');window.location.href='index.html'</script>";
}
else
{
    echo"<script>alert('ERROR al enviar el mensaje');window.location.href='index.html'</script>";
}

?>