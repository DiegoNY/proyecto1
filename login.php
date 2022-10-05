<?php include 'templates/header.php' ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Inicia Sesion :
                </div>
                <form action="procesoLogin.php" method="POST" class="p-4">
                    <div class="mb-3">
                        <label class="form-label">
                            Usuario :
                        </label>
                        <input type="text" class="form-control" name="txtUsuario" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Contraseña :
                        </label>
                        <input type="text" class="form-control" name="txtContraseña" autofocus>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="login" >
                        <input type="submit" class="btn btn-primary" value="Ingresar" action>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'templates/footer.php' ?>