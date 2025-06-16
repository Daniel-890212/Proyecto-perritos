<?php
require_once("Persistencia/CitaDAO.php");
require_once("Persistencia/Conexion.php");

class Cita {
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

    public function getId() {
        return $this->id;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function getIdEstadoCita() {
        return $this->idEstadoCita;
    }

    public function getIdPerro() {
        return $this->idPerro;
    }

    public function getIdTarifa() {
        return $this->idTarifa;
    }

    public function consultar() {
        $conexion = new Conexion();
        $citaDAO = new CitaDAO();
        $conexion->abrir();
        $conexion->ejecutar($citaDAO->consultar());
        $citas = array();
        while (($datos = $conexion->registro()) != null) {
            $cita = new Cita($datos[0], $datos[1], $datos[2], $datos[3], $datos[4]);
            array_push($citas, $cita);
        }
        $conexion->cerrar();
        return $citas;
    }
}
?>
