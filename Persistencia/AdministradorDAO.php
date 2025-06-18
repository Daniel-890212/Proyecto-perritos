<?php
class AdministradorDAO {
    public $idAdministrador;
    public $Nombre;
    public $Apellido;
    public $Correo;
    public $Clave;

    public function __construct($id="",$Nombre="",$apellido="",$Correo="",$Clave=""){
        $this->id=$id;
        $this->Nombre=$Nombre;
        $this->Apellido=$apellido;
        $this->Correo=$Correo;
        $this->Clave=$Clave;
    }

   public function consultarPorEspecialidad($idEspecialidad){
        return "select *
                from Medico 
                where Especialidad_idEspecialidad = $idEspecialidad
                order by apellido asc";
    }
    
    public function autenticar(){
        return "select idAdministradores
                from Administradores
                where correo = '" . $this -> Correo . "' and clave = '" . md5($this -> Clave) . "'";
    }
    

    public function Consultar() {
        return "SELECT * FROM Administradores";
    }
}
?>
