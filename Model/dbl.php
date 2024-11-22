<?php
    $Conexion = new Conexion();
    $Conexion->Ejemplo();
    
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
        
        public function Ejemplo(): void
        {
            $conexion = mysqli_connect("localhost","root","","db_pruebaphp");
            if (!$conexion)
                die ("Conexion fallida: " . mysqli_connect_error());
            else
                echo "conectado";
            echo "<br />";
            $reader = $conexion->query("SELECT * FROM tblogin");
            while($row = mysqli_fetch_array($reader, MYSQLI_NUM)) 
                echo "Id: "  . $row[0] .
                    ", Correo: " . $row[1] .
                    ", password: " . $row[2] .
                    "<br/>";
            mysqli_free_result($reader);
            mysqli_close($conexion);
        }
    }
?>
