<?php include 'templates/header.php' ?>

<?php 
    include_once 'model/coneccion.php';

    $sentencia = $bd -> query("select * from usuarios");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    // print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
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
                                    <th scope="col" colspan="2" >Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td>#</td>
                                    <td scope="row">Diego</td>
                                    <td>Nalvarte Yomona</td>
                                    <td>nalr@gmail.com</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                                <tr class="">
                                    <td>#</td>
                                    <td scope="row">Diego</td>
                                    <td>Nalvarte Yomona</td>
                                    <td>nalr@gmail.com</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
                                </tr>
                                <tr class="">
                                    <td>#</td>
                                    <td scope="row">Diego</td>
                                    <td>Nalvarte Yomona</td>
                                    <td>nalr@gmail.com</td>
                                    <td>Editar</td>
                                    <td>Eliminar</td>
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
                    <input type="text" class="form-control" name="txtNombre" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Apellidos : 
                    </label>
                    <input type="text" class="form-control" name="txtApellidos" autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Correo : 
                    </label>
                    <input type="text" class="form-control" name="txtCorreo" autofocus>
                </div>
                <div class="d-grid">
                    <input type="hidden" name="oculto"value="1">
                    <input type="submit" class="btn btn-primary" value="Registrar">
                </div>
                </form>
            </div>
        </div>
    </div>
    
</div>

<?php include 'templates/footer.php' ?>