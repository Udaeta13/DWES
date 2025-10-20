<?php
class Monoplaza {
    protected $nombrePiloto;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos = 0) {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }

    public function getPuntos() {
        return $this->puntos;
    }

    public function __toString() {
        return "{$this->nombrePiloto} ({$this->escuderia}) - {$this->puntos} puntos";
    }

    // Método general para ser redefinido en hijas
    public function otorgarPuntos($posicion, $vueltaRapida) {
        // Se redefine en cada categoría
    }

    // Método para validar la posición
    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 10; // por defecto, hasta 10
    }

    public function mostrarInformacion() {
        echo "<strong>Monoplaza #{$this->numero}</strong><br>";
        echo "Piloto: {$this->nombrePiloto}<br>";
        echo "Nacionalidad: {$this->nacionalidad}<br>";
        echo "Escudería: {$this->escuderia}<br>";
        echo "Puntos: {$this->puntos}<br>";
    }
}
?>
