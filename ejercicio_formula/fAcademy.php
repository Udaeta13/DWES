<?php
class FAcademy extends Monoplaza {
    private $potenciaMaxima;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Potencia máxima del motor: {$this->potenciaMaxima} CV<br><br>";
    }
}
?>
