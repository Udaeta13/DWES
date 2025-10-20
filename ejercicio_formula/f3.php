<?php
class F3 extends Monoplaza {
    private $academia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $academia) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->academia = $academia;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Academia: {$this->academia}<br><br>";
    }
}
?>
