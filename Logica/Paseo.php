<?php
require_once("Persistencia/PaseoDAO.php");
require_once("Persistencia/Conexion.php");

class Paseo {
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

    public function getId() {
        return $this->id;
    }

    public function getInicio() {
        return $this->inicio;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function getIdCita() {
        return $this->idCita;
    }

    public function consultar() {
        $conexion = new Conexion();
        $paseoDAO = new PaseoDAO();
        $conexion->abrir();
        $conexion->ejecutar($paseoDAO->consultar());
        $paseos = array();
        while (($datos = $conexion->registro()) != null) {
            $paseo = new Paseo($datos[0], $datos[1], $datos[2], $datos[3]);
            array_push($paseos, $paseo);
        }
        $conexion->cerrar();
        return $paseos;
    }
}
?>
