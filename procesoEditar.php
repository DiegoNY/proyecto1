<?php
print_r($_POST);
if(!isset($_POST['codigo'])){
    header('Location: index.php?mensaje=error');
}

include 'model/conexion.php';
$codigo = $_POST['codigo'];
$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellidos'];
$correo = $_POST['txtCorreo'];

$sentencia = $bd->prepare("UPDATE usuarios SET nombre = ?,apellido = ?, correo = ? where id = ?;");
$resultado = $sentencia->execute([$nombre,$apellido,$correo,$codigo]);

if($resultado === true){
    header('Location: index.php?mensaje=editado');
}else{
    header('Location: index.php?mensaje=error');
    exit();
}

?>