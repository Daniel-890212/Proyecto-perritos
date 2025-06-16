<?php
class PerroDAO {

      private $Id;
    private $Nombre;
    private $Foto;
    private $idDueño;
    private $IdRaza;
    public function __construct($id = "", $Nombre = "", $Foto = "", $idDueño = "", $idRaza = "")
    {
        $this->Id = $id;
        $this->Nombre = $Nombre;
        $this->Foto = $Foto;
        $this->idDueño = $idDueño;
        $this->IdRaza = $idRaza;
    }

    public function Consultar() {
        return "SELECT * FROM Perro";
    }
}
?>
