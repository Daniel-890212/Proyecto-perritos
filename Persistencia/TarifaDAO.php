<?php
class TarifaDAO {
    private $conexion;
    public $idTarifas;
    public $ValorTarifa;
    public $TipoTarifa_idTipoTarifa;
    public $Paseador_idPaseador;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertar() {
        $sql = "INSERT INTO Tarifa (idTarifas, ValorTarifa, TipoTarifa_idTipoTarifa, Paseador_idPaseador)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([
            $this->idTarifas, $this->ValorTarifa, $this->TipoTarifa_idTipoTarifa, $this->Paseador_idPaseador
        ]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->conexion->prepare("SELECT * FROM Tarifa WHERE idTarifas = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerTodos() {
        return $this->conexion->query("SELECT * FROM Tarifa")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
