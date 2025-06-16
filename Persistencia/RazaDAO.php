<?php
class RazaDAO {
    private $conexion;
    public $idRaza;
    public $Nombre;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertar() {
        $sql = "INSERT INTO Raza (Nombre) VALUES (?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$this->Nombre]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM Raza WHERE idRaza = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        return $this->conexion->query("SELECT * FROM Raza")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
