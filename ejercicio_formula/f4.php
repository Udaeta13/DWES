<?php
class F4 extends Monoplaza {
    private $paisCategoria;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $paisCategoria, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->paisCategoria = $paisCategoria;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        $tabla = [1=>25, 2=>18, 3=>15, 4=>12, 5=>10, 6=>8, 7=>6, 8=>4, 9=>2, 10=>1];
        $puntosGanados = $tabla[$posicion] ?? 0;
        $this->puntos += $puntosGanados;
    }
}
?>
