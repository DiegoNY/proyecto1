<?php
// print_r($_POST);
if(empty($_POST['txtUsuario'])){
    echo 'error';   
}

include_once 'model/conexion.php';
$usuario = $_POST['txtUsuario'];
$contraseña = $_POST['txtContraseña'];

$sentencia = $bd->prepare("SELECT * FROM usuarios where nombre = ?,correo =?;");

$resultado = $sentencia->execute($usuario,$contraseña);

if($resultado === TRUE){
    header('Location: login.php?mensaje=ingresaste');
}else{
    header('Location: lgin.php?mensaje=noIngresaste');
}
?>