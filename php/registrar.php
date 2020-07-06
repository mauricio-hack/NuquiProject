
<?php
include "cn.php";
error_reporting(0);
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$telefono=$_POST["telefono"];


$insertar= "INSERT INTO usuarios(Nombre_us,Apellido_us,Correo_us,Usuario_us,Clave_us,Telefono_us) 
values('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";

$resultado=mysqli_query($conexion,$insertar);


if(!$resultado)
{
    echo"<script>alert('Usuario ya se encuentra Registrado');window.location.href='index.html'</script>";
}

else
{
    echo"<script>alert('su registro fue exitoso');window.location.href='../index.html'</script>";
}

mysqli_close($conexion);




?>