<?php include 'templates/header.php' ?>

<?php
include_once 'model/conexion.php';

$sentencia = $bd->query("select * from usuarios");
$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
// print_r($usuarios);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!--Alerta sin registros completos-->
            <?php
            //si en get tiene la variable mensaje y esta contiene falta se mostrara la alerta si no no 
            if(isset($_GET['mensaje'] ) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Faltan Datos</strong> Completa todos los campos 😀
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>
            <!-- alerta 2 -->
            <?php
            //alerta usuarios registrados 
            if(isset($_GET['mensaje'] ) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Usuario Ingresado </strong> ✔
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>
            <!--Alerta 3-->
            <?php
            //si en get tiene la variable mensaje y esta contiene falta se mostrara la alerta si no no 
            if(isset($_GET['mensaje'] ) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> vuelve a intentarlo
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>
            <!--Alerta 4 -->
              <?php
            if(isset($_GET['mensaje'] ) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Datos Ingresados</strong>, Actualizacion Ralizada✔
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>
            <!--Alerta Elimanado-->
            <?php
            if(isset($_GET['mensaje'] ) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Datos Eliminados</strong> 🗑
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
            }
            ?>
            <!--Fin de Alerta-->

            <div class="card">
                <div class="card-header">
                    Usarios :
                </div>
                <div class="p-4">
                    <div class="table-responsive align-middle">
                        <table class="table align-middle ">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Recorriendo usuarios para mostrarlos  -->
                                <?php
                                foreach ($usuarios as $data) {

                                ?>
                                    <tr class="">
                                        <td><?php echo $data->id; ?></td>
                                        <td scope="row"><?php echo $data->nombre; ?></td>
                                        <td><?php echo $data->apellido; ?></td>
                                        <td><?php echo $data->correo; ?></td>
                                        <td "><a class="text-succes" href="editar.php?codigo=<?php echo $data->id;?>"><i class="bi bi-pen"></i></a></td>
                                        <td ><a class="text-warning" href="eliminarUsuario.php?codigo=<?php echo $data->id;?>"><i class="bi bi-trash"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <!-- fin de recorrido valores mostrados-->
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresa usuario :
                </div>
                <form action="registrarUsuario.php" method="POST" class="p-4">
                    <div class="mb-3">
                        <label class="form-label">
                            Nombre :
                        </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Apellidos :
                        </label>
                        <input type="text" class="form-control" name="txtApellidos" autofocus >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Correo :
                        </label>
                        <input type="text" class="form-control" name="txtCorreo" autofocus >
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar" action>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php' ?>