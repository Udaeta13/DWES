<?php
class F4 extends Monoplaza {
    private $paisCategoria;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos, $paisCategoria) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->paisCategoria = $paisCategoria;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "País de la categoría: {$this->paisCategoria}<br><br>";
    }
}
?>
