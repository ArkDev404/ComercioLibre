<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="assets/css/quicksand.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>ComercioLibre</title>
  </head>

  <body class="login-body">
    
    <!--Login Wrapper-->

    <div class="container-fluid login-wrapper">
        <div class="login-box">
            <h1 class="text-center mb-5"><i class="fa fa-rocket text-primary"></i> Comercio<b>Libre</b></h1>    
            <div class="row">
                <div class=" col-12 login-box-form p-4">
                    <h3 class="mb-2">Inicio de Sesión</h3>
                    <small class="text-muted bc-description">Ingresa tus credenciales aqui</small>
                    <form id="loginForm" class="mt-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control mt-0" placeholder="Correo Electronico" name="correo" aria-label="correo" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="text" class="form-control mt-0" name="contrasena" placeholder="Contraseña" aria-label="contrasena" aria-describedby="basic-addon1">
                        </div>

                        <div class="form-group">
                            <!-- <a href="dashboard.php" class="btn btn-theme btn-block p-2 mb-1"> Ingresar </a> -->
                            <input type="hidden" name="operacion" value="login">
                            <button type="submit" class="btn btn-theme btn-block p-2 mb-1">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    

    <!--Login Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- SweetAlert -->
    <script src="assets/js/sweetalert.js"></script>

    <!-- funciones -->
    <script src="controllers/UsuariosControlador.js"></script>

  </body>
</html>