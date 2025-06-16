<?php
class PaseoDAO {
    private $id;
    private $inicio;
    private $duracion;
    private $idCita;

    public function __construct($id = "", $inicio = "", $duracion = "", $idCita = "") {
        $this->id = $id;
        $this->inicio = $inicio;
        $this->duracion = $duracion;
        $this->idCita = $idCita;
    }

    public function Consultar() {
        return "SELECT * FROM Paseo";
    }
}
?>
