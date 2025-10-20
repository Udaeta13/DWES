<?php
class F1 extends Monoplaza {
    private $patrocinadorPrincipal;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $patrocinadorPrincipal) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Patrocinador principal: {$this->patrocinadorPrincipal}<br><br>";
    }
}
?>
