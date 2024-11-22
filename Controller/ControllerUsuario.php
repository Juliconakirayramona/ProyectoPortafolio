<?php
require_once '../Model/UsuarioModelo.php';

//echo $_POST;

class ControladorUsuario{
    function GuardarContacto($Nombre, $Correo, $Mensaje){
        $usuario = new UsuarioModelo();
        $usuario->setNombre($Nombre);
        $usuario->setCorreo($Correo);
        $usuario->setMensaje($Mensaje);
        $usuario->GuardarContacto();
    }


    function ValidarDatos(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $Nombre = $_POST['de_nombre'];
            $Correo = $_POST['de_email'];
            $Mensaje = $_POST ['de_mensaje'];
            $this->GuardarContacto($Nombre, $Correo, $Mensaje);
        }
    }
}

$obj = new ControladorUsuario();
$obj->ValidarDatos();
?>