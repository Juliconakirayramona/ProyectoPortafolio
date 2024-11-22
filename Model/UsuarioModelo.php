<?php
include_once("Db.php");

class UsuarioModelo
{
    private $Id;
    private $Nombre;
    private $Correo;
    private $Mensaje;
    //conexion a la bd
    private $db;

    public function __construct()
    {
        $this->db = Conexion::connect();
    }
    public function getId(){
        return $this->Id;
    }

    public function setId($Id){
        $this->Id=$this->db->real_escape_string($Id);
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function setNombre($Nombre){
    $this->Nombre=$this->db->real_escape_string($Nombre);
    }

    public function getCorreo(){
        return $this->Correo;
    }

    public function setCorreo($Correo){
        $this->Correo=$this->db->real_escape_string($Correo);
    }

    public function getMensaje(){
        return $this->Mensaje;
    }
    
    public function setMensaje($Mensaje){
        $this->Mensaje=$this->db->real_escape_string($Mensaje);
    }

    public function GuardarContacto(){
        $sql = "INSERT INTO tblcontacto VALUES (null, '{$this->getNombre()}', '{$this->getCorreo()}', '{$this->getMensaje()}')";
        if(mysqli_query($this->db, $sql)) {
            echo "Nuevo usuario";
        }else{
            echo "ERROR: " . mysqli_error($this->db);
        }
    
    }
    public function Listar(): void
    {
        $sql = "SELECT * FROM tblcontacto";
        $reader = $this->db->query($sql);
        while ($row = mysqli_fetch_array($reader, MYSQLI_NUM)) 
            echo "Id: "  . $row[0] .
                ", Nombre: " . $row[1] .
                ", Correo: " . $row[2] .
                ", Mensaje: " . $row[3] .
                "<br/>";
    }

    public function cerrarConexion(){
        mysqli_close($this->db);
    }

}   

$obj = new UsuarioModelo();
$obj->Listar();
$obj->cerrarConexion();

?>