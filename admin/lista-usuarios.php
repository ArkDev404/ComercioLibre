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
                                    <tr>
                                        <th>1</th>
                                        <th>Ray Garcia Gonzalez</th>
                                        <th>ray@comerciolibre.com</th>
                                        <th>Administrador</th>
                                        <th><img src="assets/img/client-img4.png" alt=""></th>
                                        <th>
                                            <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </th>
                                    </tr>
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