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
                    if ($contraseña == $contra) {
    
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

