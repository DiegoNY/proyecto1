<?php
// print_r($_POST);

/**validando sin estamos trayendo los datos**/  
if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellidos"]) || empty($_POST["txtCorreo"])){
    header('Location: index.php?mensaje=falta');
    exit();
}
/** Registrando los Nuevos Usuarios*/

//obteniendo datos
include_once 'model/conexion.php';
$nombre = $_POST["txtNombre"];
$apellidos = $_POST["txtApellidos"];
$correo = $_POST["txtCorreo"];

//metodo 
$sentencias = $bd->prepare("INSERT INTO usuarios(nombre,apellido,correo) VALUES (?,?,?);");

//ejecutandolo
$resultados = $sentencias->execute([$nombre,$apellidos,$correo]);

if($resultados == TRUE){
    header('Location: index.php?mensaje=registrado');
    exit();
}else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>