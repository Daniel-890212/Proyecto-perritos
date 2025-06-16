<?php
require_once("Logica/Persona.php");
require_once("Persistencia/EstadoCitaDAO.php");
require_once("Persistencia/Conexion.php");

 class EstadoCita{
    private $Id;
    private $Nombre;
        public function __construct($id="",$Nombre=""){
            $this->Id=$id;
            $this->Nombre=$Nombre;            
    }
    public function getId(){
        return $this->Id;
    }
    public function getNombre(){
        return $this->Nombre;
    }
    
    public function consultar(){
        $conexion = new Conexion();
        $EstadoCitasDAO = new EstadoCitaDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($EstadoCitasDAO-> Consultar());
        $EstadosCitas = array();
        while(($datos = $conexion -> registro()) != null){
            $EstadoPaseador = new EstadoPaseador($datos[0],$datos[1]);
            array_push($EstadosCitas, $EstadoPaseador);
        }
        $conexion->cerrar();
        return $EstadosCitas;
    }
 }



?>