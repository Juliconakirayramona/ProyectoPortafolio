<?php
require_once '../Model/Usermode.php';
class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new UserModel($db);
    }

    public function register($username, $password) {
        if ($this->userModel->register($username, $password)) {
            header("Location: index.php?action=login");
        } else {
            echo "Error al registrar usuario.";
        }
    }

    public function login($username, $password) {
        $user = $this->userModel->login($username, $password);
        if ($user) {
            session_start();
            $_SESSION['user'] = $user['username'];
            echo "Inicio de sesión exitoso. Bienvenido, " . $user['username'];
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }
    }
}
?>
