<?php
// print_r($_POST);
if(empty($_POST['txtUsuario'])|| empty($_POST['txtContraseña'])){
    echo 'error';   
}

include_once 'model/conexion.php';
$usuario = $_POST['txtUsuario'];
$contraseña = $_POST['txtContraseña'];

//consultas creo que es una mala practica tener el codigo asi 🤔
$sentencia = $bd->prepare("SELECT * FROM usuarios where nombre = ? and correo =?;");

$resultado = $sentencia->execute([$usuario,$contraseña]);


// si las filas fueron afectadas se puede ingresar 
if( $sentencia->rowCount() >= 1){
    header('Location: index.php?mensaje=ingresaste');
}else{
    header('Location: login.php?mensaje=noIngresaste'); 
    exit();
}
?>