<?php
require_once("Logica/Persona.php");
require_once("Persistencia/TarifaDAO.php");
require_once("Persistencia/Conexion.php");

 class Tarifa{
    private $Id;
    private $Valor;
    private $idPaseador;
        public function __construct($id="",$Valor="",$idPaseador=""){
            $this->Id=$id;
            $this->Valor=$Valor;            
            $this->idPaseador=$idPaseador;            
    }
    public function getId(){
        return $this->Id;
    }
    public function getValor(){
        return $this->Valor;
    }
    public function getIdPaseador(){
        return $this->idPaseador;
    }
    
    public function consultar(){
        $conexion = new Conexion();
        $TarifaDAO = new TarifaDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($TarifaDAO-> Consultar());
        $Tarifas = array();
        while(($datos = $conexion -> registro()) != null){
            $Tarifa = new Tarifa($datos[0],$datos[1], $datos[2]);
            array_push($Tarifas, $Tarifa);
        }
        $conexion->cerrar();
        return $Tarifas;
    }
 }



?>