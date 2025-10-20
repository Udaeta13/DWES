<?php
class F4 extends Monoplaza {
    private $paisCategoria;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $paisCategoria, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->paisCategoria = $paisCategoria;
    }

    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 10;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        if (!$this->posicionValida($posicion)) {
            echo "Posición {$posicion} no válida para {$this->nombrePiloto}<br>";
            return;
        }

        $tabla = [1=>25,2=>18,3=>15,4=>12,5=>10,6=>8,7=>6,8=>4,9=>2,10=>1];
        $puntosGanados = $tabla[$posicion] ?? 0;

        // F4 no suma punto por vuelta rápida
        $this->puntos += $puntosGanados;
    }
}
?>
