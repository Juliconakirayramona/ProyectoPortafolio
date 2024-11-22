<?php
require_once '../Model/ValidarU.php';
session_start();
    
    class UsuarioController {
    
        public function guardar() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $Correo = $_POST['de_correo'] ?? false;
                $password = $_POST['de_clave'] ?? false;
    
                if ($Correo && $password) {
                    $usuario = new Usuario();
                    $usuario->setCorreo($Correo);
                    $usuario->setpassword($password);
                    $save = $usuario->guardar();
    
                    if ($save) {
                        $_SESSION['registrer'] = "complete";
                    } else {
                        $_SESSION['registrer'] = "failed";
                    }
                } else {
                    $_SESSION['registrer'] = "failed";
                }
            }
        }
        public function login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $usuario = new Usuario();
        
                // Validar y sanitizar datos
                $correo = filter_var($_POST['de_correo'], FILTER_SANITIZE_EMAIL);
                $password = $_POST['de_clave'] ?? '';
        
                $usuario->setCorreo($correo);
                $usuario->setpassword($password);
        
                $identificacion = $usuario->login();
                
                if ($identificacion && is_object($identificacion)) {
                    $_SESSION['identificacion'] = $identificacion;
        
                    // Verificar el rol del usuario
                    if (isset($identificacion->rol) && $identificacion->rol == 'admin') {
                        $_SESSION['admin'] = true;
                    } else {
                        $_SESSION['error_login'] = "Identificación no válida.";
                    }
                } else {
                    $_SESSION['error_login'] = "Credenciales incorrectas.";
                }
            }
        }
}



    
?>
