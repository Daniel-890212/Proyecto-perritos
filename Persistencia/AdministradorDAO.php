<?php
class AdministradorDAO {
    public $idAdministrador;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Clave;

    public function __construct($id="",$Nombre="",$apellido="",$Correo="",$Clave=""){
        $this->id=$id;
        $this->Nombre=$Nombre;
        $this->Apellido=$apellido;
        $this->Correo=$Correo;
        $this->Clave=$Clave;
    }

    public function insertar() {
        return "INSERT INTO Administradores (Nombre, Apellido, Correo, Clave) VALUES ($this->Nombre, $this->Apellido, $this->Correo,$this->Clave)";
    }

    public function obtenerPorId($id) {
        return "SELECT * FROM Administradores WHERE idAdministradores = ?";
    }

    public function Consultar() {
        return "SELECT * FROM Administradores";
    }
}
?>
