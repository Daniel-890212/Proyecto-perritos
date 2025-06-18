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

public function autenticar(){
        return "select idPaseador
                from Paseador
                where correo = '" . $this -> Correo . "' and clave = '" . md5($this -> Clave) . "'";
    }
    
    public function Consultar() {
        return "SELECT * FROM Paseador";
    }
}
?>
