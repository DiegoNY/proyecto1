<?php
// print_r($_POST);

//registrando usuarios 
if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtApellidos"]) || empty($_POST["txtCorreo"])){
    header('Location: index.php?mensaje=falta');
    exit();
}
?>