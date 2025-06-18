<?php
class DueñoDAO {
    public $idDueño;
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
        return "INSERT INTO Dueño (Nombre, Apellido, Correo, Clave) VALUES ('$this->Nombre', '$this->Apellido', '$this->Correo','$this->Clave')";
    }

    public function autenticar(){
        return "select idDueño
                from Dueño
                where correo = '" . $this -> Correo . "' and clave = '" . md5($this -> Clave) . "'";
    }
    
    public function Consultar() {
        return "SELECT * FROM Dueño";
    }
}
?>
