<?php
require_once("Logica/Persona.php");
require_once("Persistencia/DueñoDAO.php");
require_once("Persistencia/Conexion.php");

 class Dueño extends Persona{
        public function __construct($id="",$Nombre="",$apellido="",$Correo="",$Clave=""){
            parent::__construct($id,$Nombre,$apellido,$Correo,$Clave);
    }
    //     public function autenticar(){
    //     $conexion = new Conexion();
    //     $medicoDAO = new MedicoDAO("","","", $this -> correo, $this -> clave);
    //     $conexion -> abrir();
    //     $conexion -> ejecutar($medicoDAO -> autenticar());
    //     if($conexion -> filas() == 1){
    //         $this -> id = $conexion -> registro()[0];
    //         $conexion->cerrar();
    //         return true;
    //     }else{
    //         $conexion->cerrar();
    //         return false;
    //     }
    // }
    
    public function consultar(){
        $conexion = new Conexion();
        $DueñoDAO = new DueñoDAO();
        $conexion -> abrir();
        $conexion -> ejecutar($DueñoDAO-> Consultar());
        $Dueños = array();
        while(($datos = $conexion -> registro()) != null){
            $Dueño = new Dueño($datos[0],$datos[1],$datos[2],$datos[3],$datos[4]);
            array_push($Dueños, $Dueño);
        }
        $conexion->cerrar();
        return $Dueños;
    }
 }



?>