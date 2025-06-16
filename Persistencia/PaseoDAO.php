<?php
class PaseoDAO {
    private $conexion;
    public $idPaseo;
    public $Inicio;
    public $Duracion;
    public $Cita_idCita;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertar() {
        $sql = "INSERT INTO Paseo (idPaseo, Inicio, Duracion, Cita_idCita)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([
            $this->idPaseo, $this->Inicio, $this->Duracion, $this->Cita_idCita
        ]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM Paseo WHERE idPaseo = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        return $this->conexion->query("SELECT * FROM Paseo")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
