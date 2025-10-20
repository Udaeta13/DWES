<?php
class F2 extends Monoplaza {
    private $tieneSuperlicencia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $tieneSuperlicencia) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->tieneSuperlicencia = $tieneSuperlicencia;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        $estado = $this->tieneSuperlicencia ? "Sí" : "No";
        echo "¿Tiene superlicencia?: {$estado}<br><br>";
    }
}
?>
