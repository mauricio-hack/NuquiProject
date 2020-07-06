<?php

include "cn.php";

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


//consulta al la base de datos

$consulta="SELECT * FROM usuarios WHERE Usuario_us='$usuario' and Clave_us='$clave'";

$res=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($res);

if($filas>0){
 echo("<script>alert('Bienvenidos a nuquiboy');window.location.href='bienvenidos.html'</script>");
}
else{
    echo"<script>alert('ERROR DE AUTENTICACION');window.location.href='index.html'</script>";
}
mysqli_free_result($res);
mysqli_close($conexion);