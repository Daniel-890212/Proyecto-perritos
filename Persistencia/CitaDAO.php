<?php
class CitaDAO {
    public $idCita;
    public $Horario;
    public $EstadoCita_idEstadoCita;
    public $Perro_idPerro;
    public $Tarifa_idTarifas;

    public function __construct() {
    }

    public function insertar() {
        return "INSERT INTO Cita (idCita, Horario, EstadoCita_idEstadoCita, Perro_idPerro, Tarifa_idTarifas)
                VALUES ($this->idCita, $this->Horario, $this->EstadoCita_idEstadoCita, $this->Perro_idPerro, $this->Tarifa_idTarifas)";
    }

    public function obtenerPorId($id) {
        return "SELECT * FROM Cita WHERE idCita = $id";
    }

    public function obtenerTodos() {
        return "SELECT * FROM Cita";
    }
}
?>
