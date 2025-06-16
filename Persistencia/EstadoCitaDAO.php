<?php
class EstadoCitaDAO {
    private $conexion;
    public $idEstadoCita;
    public $Nombre;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertar() {
        $sql = "INSERT INTO EstadoCita (Nombre) VALUES (?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$this->Nombre]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM EstadoCita WHERE idEstadoCita = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        return $this->conexion->query("SELECT * FROM EstadoCita")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
