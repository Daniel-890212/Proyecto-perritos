<?php
class CitaDAO {
       private $id;
    private $horario;
    private $idEstadoCita;
    private $idPerro;
    private $idTarifa;

    public function __construct($id = "", $horario = "", $idEstadoCita = "", $idPerro = "", $idTarifa = "") {
        $this->id = $id;
        $this->horario = $horario;
        $this->idEstadoCita = $idEstadoCita;
        $this->idPerro = $idPerro;
        $this->idTarifa = $idTarifa;
    }



    public function obtenerPorId($id) {
        return "SELECT * FROM Cita WHERE idCita = $id";
    }

    public function Consultar() {
        return "SELECT * FROM Cita";
    }
}
?>
