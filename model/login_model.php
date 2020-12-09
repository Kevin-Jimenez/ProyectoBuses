<?php
include ("../bd/conexion.php");

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$tipo = $_POST['tipo'];

$sql ="SELECT * FROM usuario WHERE usuario='$usuario' and contrasena='$contrasena' and tipo='$tipo'";
$resultado=$base->prepare($sql);
$resultado->execute();

$numero_registro=$resultado->rowcount();

if ($numero_registro != 0) {
    if ($tipo == 1) {
        header("location:../menu.php");
    }elseif ($tipo == 2) {
        header("location:../index.php?c=rutas");
    }elseif ($tipo == 3) {
        header("location:../index.php?c=conductor");
    }
   
    
}else {
    header("location:../view/Login/login.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>