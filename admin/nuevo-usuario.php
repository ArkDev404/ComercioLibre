<?php 
    include 'template/header.php';
    include 'template/menu.php';
?>

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Agregar Usuario</strong></h5>
                <p class="text-muted"> Rellena la información correspondiente </p>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--Default elements-->
                        <div class="mb-1 p-3 button-container bg-white border shadow-sm wizard-card">
                            <form class="form-horizontal mt-4 mb-5">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-2"> <i class="fas fa-address-book h4"> </i> Información General</h6>
                                        <div class="form-group floating-label">
                                            <input class="form-control" name="nombre" type="text" required>
                                            <label for="">Nombre</label>
                                        </div>
                                        <div class="form-group floating-label">
                                            <input class="form-control" name="apaterno" type="text" required>
                                            <label for="">Apellido Paterno</label>
                                        </div>
                                        <div class="form-group floating-label">
                                            <input class="form-control" name="amaterno" type="text" required>
                                            <label for="">Apellido Materno</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <h6 class="mb-5"> <i class="fas fa-image h4"> </i> Foto de Perfil</h6>
                                        <div class="picture-container">
                                            <div class="picture">
                                                <img src="assets/img/default-avatar.jpg" class="picture-src img-fluid rounded-circle" id="wizardPicturePreview" width="150px" title="" />
                                                <input type="file" id="wizard-picture" name="foto" accept="image/*">
                                            </div>
                                            <h6>Elige una foto</h6>
                                        </div>
                                    </div>                                
                                </div>

                                <h6 class="mt-4"> <i class="fas fa-user-circle h4"> </i> Información de Acceso</h6>

                                <div class="form-group floating-label">
                                    <input class="form-control" name="correo" type="text" required>
                                    <label for="">Correo</label>
                                </div>

                                <div class="form-group floating-label">
                                    <select name="tipo" class="custom-select" required="">
                                        <option value="1">Administrador</option>
                                        <option value="2">Vendedor</option>
                                    </select>
                                    <label for="" class="mt-1">Tipo de Usuario</label>
                                </div>

                                
                                <div class="form-group floating-label">
                                    <input class="form-control" name="contrasena" type="password" required>
                                    <label for="">Contraseña</label>
                                </div>

                                <div class="text-right">
                                    <button class="btn btn-theme" type="submit">Registrar</button>
                                </div>
                                

                            </form>      



                    </div>
                </div>

            </div>
        </div>

        <!--Main Content-->

    </div>
    
<?php 
    include 'template/footer.php';
?>