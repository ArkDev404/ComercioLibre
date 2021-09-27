

        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Ray Garcia</strong></p>
                        <span class="text-primary small"><strong>Administrador</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="dashboard.php" class=""><i class="fa fa-dashboard mr-3"></i>
                                    <span class="none">Dashboard </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('usuarios'); return false" class=""><i class="fa fa-user mr-3"></i>
                                    <span class="none">Usuarios<i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="usuarios">
                                    <li class="child"><a href="nuevo-usuario.php" class="ml-4"><i class="fa fa-plus mr-2"></i> Nuevo Usuario</a></li>
                                    <li class="child"><a href="lista-usuarios.php" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Lista de Usuarios</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->