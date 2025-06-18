<?php
require_once("Logica/Persona.php");
require_once("Persistencia/PaseadorDAO.php");
require_once("Persistencia/Conexion.php");

 class Paseador extends Persona{
    private $Foto;
    private $Estado;
        public function __construct($id="",$Nombre="",$apellido="",$Correo="",$Clave="",$Foto="",$Estado=""){
            parent::__construct($id,$Nombre,$apellido,$Correo,$Clave);
            $this->Estado=$Estado;
    }
       public function getFoto(){
        return $this->Foto;
    }
    public function getEstado(){
        return $this->Estado;
    }
        public function autenticar(){
        $conexion = new Conexion();
        $PaseadorDAO = new PaseadorDAO("","","", $this -> Correo, $this -> Clave);
        $conexion -> abrir();
        $conexion -> ejecutar($PaseadorDAO -> autenticar());
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
        $PaseadorDAO = new PaseadorDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($PaseadorDAO-> Consultar());
        $Dueños = array();
        while(($datos = $conexion -> registro()) != null){
            $Paseador = new Paseador($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);
            array_push($Dueños, $Paseador);
        }
        $conexion->cerrar();
        return $Dueños;
    }
 }



?>