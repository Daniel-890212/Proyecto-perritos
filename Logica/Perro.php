<?php
require_once("Logica/Persona.php");
require_once("Persistencia/PerroDAO.php");
require_once("Persistencia/Conexion.php");

class Perro
{
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
    public function getId()
    {
        return $this->Id;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getFoto()
    {
        return $this->Foto;
    }

    public function getIdDueño()
    {
        return $this->idDueño;
    }

    public function getIdRaza()
    {
        return $this->IdRaza;
    }


    public function consultar()
    {
        $conexion = new Conexion();
        $PerroDAO = new PerroDAO();
        $conexion->abrir();
        $conexion->ejecutar($PerroDAO->Consultar());
        $EstadosCitas = array();
        while (($datos = $conexion->registro()) != null) {
            $Perro = new Perro($datos[0], $datos[1],$datos[2],$datos[3],$datos[4]);
            array_push($EstadosCitas, $Perro);
        }
        $conexion->cerrar();
        return $EstadosCitas;
    }
}



?>