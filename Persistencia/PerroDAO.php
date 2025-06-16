<?php
class PerroDAO {
    private $conexion;
    public $idPerro;
    public $Nombre;
    public $Foto;
    public $Dueño_idDueño;
    public $Raza_idRaza;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertar() {
        $sql = "INSERT INTO Perro (Nombre, Foto, Dueño_idDueño, Raza_idRaza) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([
            $this->Nombre, $this->Foto, $this->Dueño_idDueño, $this->Raza_idRaza
        ]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM Perro WHERE idPerro = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        return $this->conexion->query("SELECT * FROM Perro")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
