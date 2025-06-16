<?php
class PaseadorDAO {
    private $conexion;
    public $idPaseador;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Clave;
    public $EstadoPaseador_idEstadoPaseador;

   public function __construct($id="",$Nombre="",$apellido="",$Correo="",$Clave="",$EstadoPaseador_idEstadoPaseador=""){
        $this->id=$id;
        $this->Nombre=$Nombre;
        $this->Apellido=$apellido;
        $this->Correo=$Correo;
        $this->Clave=$Clave;
        $this->EstadoPaseador_idEstadoPaseador=$EstadoPaseador_idEstadoPaseador;
    }

    public function insertar() {
        return "INSERT INTO Administradores (Nombre, Apellido, Correo, Clave) VALUES ($this->Nombre, $this->Apellido, $this->Correo,$this->Clave)";
    }

    public function obtenerPorId($id) {
        return "SELECT * FROM Administradores WHERE idAdministradores = ?";
    }

    public function Consultar() {
        return "SELECT * FROM Paseador";
    }
}
?>
