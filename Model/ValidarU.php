<?php
include_once("dbl.php");
class Usuario {
    private $db; // Conexión a la base de datos
    private $correo;
    private $password;
    private $rol;

    public function __construct($db) {
        $this->db = $db; // Asignar la conexión a la base de datos
    }

    // Métodos para establecer los atributos
    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setPassword($password) {
        // Se recomienda usar password_hash para almacenar contraseñas
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }


    // Método para registrar un nuevo usuario
    public function registrar() {
        $sql = "INSERT INTO tblogin (correo, password) VALUES (:correo, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':correo', $this->correo);
        $stmt->bindParam(':password', $this->password);

        return $stmt->execute(); // Devuelve true si se ejecuta correctamente
    }

    // Método para autenticar un usuario
    public function login() {
        $sql = "SELECT * FROM tblogin WHERE correo = :correo LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':correo', $this->correo);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $usuario = $stmt->fetch(PDO::FETCH_OBJ);

            // Verificar la contraseña
            if (password_verify($this->password, $usuario->password)) {
                return $usuario; // Retornar el objeto del usuario
            } else {
                return false; // Contraseña incorrecta
            }
        }
        return false; // Usuario no encontrado
    }
}
?>

