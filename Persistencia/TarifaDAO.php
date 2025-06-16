<?php
class TarifaDAO {
      private $Id;
    private $Valor;
    private $idPaseador;
        public function __construct($id="",$Valor="",$idPaseador=""){
            $this->Id=$id;
            $this->Valor=$Valor;            
            $this->idPaseador=$idPaseador;            
    }
    public function Consultar() {
        return "SELECT * FROM Tarifa";
    }
}
?>
