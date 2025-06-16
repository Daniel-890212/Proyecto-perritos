<?php
require_once("Logica/Persona.php");
require_once("Persistencia/RazaDAO.php");
require_once("Persistencia/Conexion.php");

 class Raza{
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
        $RazaDAO = new RazaDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($RazaDAO-> Consultar());
        $Razas = array();
        while(($datos = $conexion -> registro()) != null){
            $Raza = new Raza($datos[0],$datos[1]);
            array_push($Razas, $Raza);
        }
        $conexion->cerrar();
        return $Razas;
    }   
 }



?>