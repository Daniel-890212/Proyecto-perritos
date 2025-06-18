<?php
require_once("Logica/Persona.php");
require_once("Persistencia/AdministradorDAO.php");
require_once("Persistencia/Conexion.php");

 class Administrador extends Persona{
        public function __construct($id="",$Nombre="",$apellido="",$Correo="",$Clave=""){
            parent::__construct($id,$Nombre,$apellido,$Correo,$Clave);
    }
        public function autenticar(){
        $conexion = new Conexion();
        $AdministradorDAO = new AdministradorDAO("","","", $this -> Correo, $this -> Clave);
        $conexion -> abrir();
        $conexion -> ejecutar($AdministradorDAO -> autenticar());
        if($conexion -> filas() == 1){
            $this -> id = $conexion -> registro()[0];
            $conexion->cerrar();
            return true;
        }else{
            $conexion->cerrar();
            return false;
        }
    }
    
    public function consultar(){
        $conexion = new Conexion();
        $AdministradorDAO = new AdministradorDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($AdministradorDAO-> Consultar());
        $Administradores = array();
        while(($datos = $conexion -> registro()) != null){
            $administrador = new Administrador($datos[0],$datos[1],$datos[2],$datos[3],$datos[4]);
            array_push($Administradores, $administrador);
        }
        $conexion->cerrar();
        return $Administradores;
    }
 }



?>