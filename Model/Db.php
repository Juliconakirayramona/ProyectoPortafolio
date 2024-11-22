<?php
    $Conexion = new Conexion();
    //$Conexion->Ejemplo();
    
    class Conexion
    {
        public static function connect()
        {
            $conexion = mysqli_connect("localhost","root","","db_pruebaphp");
            if (!$conexion)
                die ("Conexion fallida: " . mysqli_connect_error());
            else
                echo "conectado";
            echo "<br />";
            return $conexion;
        }
    }
?>
