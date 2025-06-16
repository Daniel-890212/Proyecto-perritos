<?php
require_once("Logica/Persona.php");
require_once("Persistencia/EstadoPaseadorDAO.PHP");
require_once("Persistencia/Conexion.php");

 class EstadoPaseador{
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
        $EstadoPaseadorDAO = new EstadoPaseadorDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($EstadoPaseadorDAO-> Consultar());
        $EstadoPaseadores = array();
        while(($datos = $conexion -> registro()) != null){
            $EstadoPaseador = new EstadoPaseador($datos[0],$datos[1]);
            array_push($EstadoPaseadores, $EstadoPaseador);
        }
        $conexion->cerrar();
        return $EstadoPaseadores;
    }
 }



?>