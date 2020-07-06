<?php

include "cn.php";

$nombre_suscrip=$_POST['nombre_suscrip'];
$correo_suscrip=$_POST['correo_suscrip'];


$contl="INSERT INTO suscriptores(nombre_us,correo_us) values (nombre_suscrip,correo_suscrip)";
$sus=mysqli_query($conexion,$contl);

if(!$sus)
{
    echo"<script>alert('mensaje enviado con exito');window.location.href='index.html'</script>";
}
else
{
    echo"<script>alert('ERROR al enviar el mensaje');window.location.href='index.html'</script>";
}

?>



