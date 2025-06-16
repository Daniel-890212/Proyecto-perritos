<?php
class EstadoPaseadorDAO {
    private $conexion;
    public $idEstadoPaseador;
    public $Nombre;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertar() {
        $sql = "INSERT INTO EstadoPaseador (idEstadoPaseador, Nombre) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$this->idEstadoPaseador, $this->Nombre]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM EstadoPaseador WHERE idEstadoPaseador = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        return $this->conexion->query("SELECT * FROM EstadoPaseador")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
