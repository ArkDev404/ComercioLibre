<?php 
    include 'template/header.php';
    include 'template/menu.php';
?>


<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0" ><strong>Lista de Usuarios</strong></h5>
                <p class="text-muted"> A continuación se muestra un listado de los usuarios actualmente en el sistema </p>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <!--Default elements-->
                        <div class="mb-1 p-3 button-container bg-white border shadow-sm"> 
                            <table class="table">
                                <thead class="bg-theme">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Tipo</th>
                                        <th>Foto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        include "config/conexion.php";

                                        try {
                                            $query = "Select idUsuario,concat_ws(' ', U.nombre, apellidopaterno, apellidomaterno) as nombre, correo, TU.nombre as tipo, contraseña, U.activo, foto 
                                                    from Usuarios U inner join TipoUsuarios TU
                                                    on U.idTipo = TU.idTipo
                                                    order by idUsuario asc";
                                            $result = $conn->query($query);
                                            $usuarios = $result->fetchAll(PDO::FETCH_OBJ);

                                            // echo "<pre>";
                                            // var_dump($usuarios);
                                            // echo "</pre>";

                                            foreach($usuarios as $usuario){
                                                echo "<tr>
                                                        <th>$usuario->idusuario</th>
                                                        <th>$usuario->nombre</th>
                                                        <th>$usuario->correo</th>
                                                        <th>$usuario->tipo</th>
                                                        <th><img class='rounded-circle' width='60px' src='assets/img/$usuario->foto' alt=''></th>
                                                        <th>
                                                            <a href='editar-usuario.php?id=$usuario->idusuario' class='btn btn-warning'><i class='fa fa-edit'></i></a>
                                                           
                                                        </th>
                                                    </tr>";
                                            }

                                        } catch (\Throwable $th) {
                                            //throw $th;
                                        }
                                    
                                    ?>
                                </tbody>
                                <tfoot class="bg-theme">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Tipo</th>
                                        <th>Foto</th>
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

<?php 
    include 'template/footer.php';
?>