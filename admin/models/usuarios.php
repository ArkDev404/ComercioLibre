<?php 

    include '../config/conexion.php';

    if ($_POST['operacion'] == 'login') {
        $correo = $_POST['correo'];
        $contraseña = $_POST['contrasena'];

        try {
            $stmt = $conn->prepare("SELECT concat_ws(' ', U.nombre, apellidopaterno, apellidomaterno) as nombre, TU.nombre as tipo, contraseña, U.activo, foto 
            from Usuarios U inner join TipoUsuarios TU
            on U.idTipo = TU.idTipo
            where correo = ? ");


            $stmt->execute([$correo]);

            $stmt->bindColumn(1,$nombre);
            $stmt->bindColumn(2,$tipo);
            $stmt->bindColumn(3,$contra);
            $stmt->bindColumn(4,$activo);
            $stmt->bindColumn(5,$foto);

            $registers = $stmt->rowCount();
    
            if ($registers!=0) {
                $exists = $stmt -> fetch();
    
                if ($exists) {
                    if (password_verify($contraseña,$contra)) {
    
                        if ($activo == "1") {
                         
                            session_start();
    
                            $_SESSION["nombre"] = $nombre;
                            $_SESSION["tipo"] = $tipo;
                            $_SESSION["foto"] = $foto;
        
                            $response = array(
                                'resp' => 'OK',
                                'message' => 'Inicio de Sesión Exitoso',
                                'url' => 'dashboard.php'
                            );
                        } else {
                            $response = array(
                                'resp' => 'Error',
                                'message' => 'El usuario esta deshabilitado, contacta al Administrador',
                                'url' => 'index.php'
                            ); 
                        }
                    } else {
                        $response = array(
                            'resp' => 'Error',
                            'message' => 'La contraseña es incorrecta',
                            'url' => 'index.php'
                        );
                    }
                } else {
                    $response = array(
                        'resp' => 'Error',
                        'message' => 'El usuario y/o contraseña son incorrectos',
                        'url' => 'index.php'
                    );
                }
    
            } else {
                $response = array(
                    'resp' => 'Error',
                    'message' => 'No se encontraron datos en el Sistema',
                    'url' => 'index.php'
                );
            }
        } catch (Exception $e) {
            $response = array(
                'resp' => 'Error',
                'message' => $e,
                'url' => 'index.php'
            );
        }
    
        die(json_encode($response));

    }

    if ($_POST["operacion"] == "insertar") {

        $nombre      = $_POST["nombre"];
        $apaterno    = $_POST["apaterno"];
        $amaterno    = $_POST["amaterno"];
        $cumpleanios = $_POST["cumpleanios"];
        $correo      = $_POST["correo"];
        $tipo        = $_POST["tipo"];
        $contrasena  = $_POST["contrasena"];
        $activo = 1;
        
        $directorio = "../assets/img/usuarios/";

        // Crea el directo de que no exista
        if (!is_dir($directorio)) {
            mkdir($directorio, 0755,true);
        }

        // Mover la imagen de la ruta temporal a una ruta fisica especifica
        if (move_uploaded_file($_FILES['foto']['tmp_name'],$directorio . $_FILES['foto']['name'])) {
            $imagen_url = $_FILES['foto']['name'];
        } else {
            $response = array(
                'resp' => error_get_last()
            );
        }

        
        $opciones = array(
            'cost' => 12
        );

        $encriptada = password_hash($contrasena,PASSWORD_BCRYPT, $opciones);

        try {
            $stmt = $conn -> prepare("Insert into Usuarios (Nombre, ApellidoPaterno, ApellidoMaterno, Correo, Contraseña, FechaCumpleaños, Activo, foto, idTipo)
                                    values(?, ?, ?, ?, ?, ?, ?, ?, ?); ");

             $stmt->execute([$nombre, $apaterno, $amaterno, $correo, $encriptada, $cumpleanios, $activo, $imagen_url, $tipo]);
     
             $id_inserted = $conn->lastInsertId();
     
             if($id_inserted != 0) {
                 $response = array(
                     'resp' => 'OK',
                     'message' => "Se ha insertado exitosamente",
                     'url' => "lista-usuarios.php"
                 );
             } else {
                 $response = array(
                     'resp' => 'Error',
                     'message' => "Hubo un error al intentar insertar el usuario",
                     'url' => "index.php"
                 );
             }
     
        } catch (Exception $e) {
         $response = array(
             'resp' => 'Error',
             'message' => $e,
             'url' => "index.php"
         );
        }
        
        die(json_encode($response));
    }
    