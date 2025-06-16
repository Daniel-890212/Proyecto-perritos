<?php
class EstadoPaseadorDAO {
    public $idEstadoPaseador;
    public $Nombre;
        public function __construct($id="",$Nombre=""){
            $this->Id=$id;
            $this->Nombre=$Nombre;            
    }
    public function Consultar() {
        return "SELECT * FROM EstadoPaseador";
    }
}
?>
