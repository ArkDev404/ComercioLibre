<?php 
    include 'template/header.php';
    include 'template/menu.php';
    include 'config/conexion.php';
    $id = $_GET['id'];
?>

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Agregar Usuario</strong></h5>
                <p class="text-muted"> Rellena la información correspondiente </p>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--Default elements-->
                        <div class="mb-1 p-3 button-container bg-white border shadow-sm wizard-card">
                            <form id="insertUsuario" enctype="multipart/form-data" class="form-horizontal mt-4 mb-5">
                                <?php
                                        $sql = "Select *
                                        from Usuarios
                                        where idUsuario = $id";
                                        $resultado = $conn->query($sql);
                                        $usuario = $resultado->fetch(PDO::FETCH_OBJ);

                                        // echo "<pre>";
                                        // var_dump($usuario);
                                        // echo "</pre>";

                                ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6 class="mb-2"> <i class="fas fa-address-book h4"> </i> Información General</h6>
                                        <div class="form-group floating-label">
                                            <input class="form-control" name="nombre" type="text" value="<?php echo $usuario->nombre;?>" required>
                                            <label for="">Nombre</label>
                                        </div>
                                        <div class="form-group floating-label">
                                            <input class="form-control" name="apaterno" type="text" value="<?php echo $usuario->apellidopaterno;?>" required>
                                            <label for="">Apellido Paterno</label>
                                        </div>
                                        <div class="form-group floating-label">
                                            <input class="form-control" name="amaterno" type="text" value="<?php echo $usuario->apellidomaterno;?>" required>
                                            <label for="">Apellido Materno</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Fecha de Cumpleaños</label>
                                            <input class="form-control" name="cumpleanios" type="date" value="<?php echo $usuario->fechacumpleaños;?>" required>
                                        </div>
                                    </div>


                                    <div class="col-sm-4">
                                        <h6 class="mb-5"> <i class="fas fa-image h4"> </i> Foto de Perfil</h6>
                                        <div class="picture-container">
                                            <div class="picture" style="height: 200px; width:200px;">
                                                <img src="assets/img/usuarios/<?php echo $usuario->foto;?>" class="picture-src img-fluid rounded-circle" id="wizardPicturePreview" title="" />
                                                <input type="file" id="wizard-picture" name="foto" accept="image/*">
                                            </div>
                                            <h6>Elige una foto</h6>
                                        </div>
                                    </div>                                
                                </div>

                                <h6 class="mt-4"> <i class="fas fa-user-circle h4"> </i> Información de Acceso</h6>

                                <div class="form-group floating-label">
                                    <input class="form-control" name="correo" type="text" value="<?php echo $usuario->correo;?>" required>
                                    <label for="">Correo</label>
                                </div>

                                <div class="form-group floating-label">
                                    <select name="tipo" class="custom-select" required="">
                                        <?php 
                                        
                                            $sql = "Select *
                                                    from TipoUsuarios";
                                            $resultado = $conn->query($sql);
                                            $tipos = $resultado->fetchAll(PDO::FETCH_OBJ);
                                        
                                            foreach ($tipos as $tipo) {
                                                echo "<option value='$tipo->idtipo'>$tipo->nombre</option>";
                                            }

                                        ?>
                                    </select>
                                    <label for="" class="mt-1">Tipo de Usuario</label>
                                </div>

                                
                                <div class="form-group floating-label">
                                    <input class="form-control" name="contrasena" type="password" >
                                    <label for="">Contraseña</label>
                                </div>
                                <small class="text-muted"> Si no desea cambiar la contraseña deje este campo vacio</small>

                                <div class="text-right">
                                    <input type="hidden" name="operacion" value="actualizar">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <button class="btn btn-theme" type="submit">Actualizar</button>
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