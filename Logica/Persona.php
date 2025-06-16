<?php
abstract class Persona
{
    protected $id;
    protected $Nombre;
    protected $apellido;
    protected $Correo;
    protected $Clave;
    public function __construct($id = "", $Nombre = "", $apellido = "", $Correo = "", $Clave = "")
    {
        $this->id = $id;
        $this->Nombre = $Nombre;
        $this->apellido=$apellido;
        $this->Correo=$Correo;
        $this->Clave=$Clave;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getCorreo()
    {
        return $this->Correo;
    }

    public function setCorreo($Correo)
    {
        $this->Correo = $Correo;
    }

    public function getClave()
    {
        return $this->Clave;
    }

    public function setClave($Clave)
    {
        $this->Clave = $Clave;
    }
}


?>