<?php include 'templates/header.php' ?>

<?php 
if(!isset($_GET['codigo'])){
    header('Location: index.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$codigo = $_GET['codigo'];

$sentencia = $bd->prepare("select * from usuarios where id = ? ;");
$sentencia->execute([$codigo]);
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);
// print_r($usuario);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Editar Usuarios :
                </div>
                <form action="procesoEditar.php" method="POST" class="p-4">
                    <div class="mb-3">
                        <label class="form-label">
                            Nombre :
                        </label>
                        <input type="text" class="form-control" name="txtNombre" value="<?php echo $usuario->nombre?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Apellidos :
                        </label>
                        <input type="text" class="form-control" name="txtApellidos" value="<?php echo $usuario->apellido?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Correo :
                        </label>
                        <input type="text" class="form-control" name="txtCorreo" value="<?php echo $usuario->correo?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $usuario->id?>">
                        <input type="submit" class="btn btn-primary" value="Editar" action>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'templates/footer.php' ?>