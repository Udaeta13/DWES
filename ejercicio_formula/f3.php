<?php
class F3 extends Monoplaza {
    private $academia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $academia, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->academia = $academia;
    }

    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 9;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        if (!$this->posicionValida($posicion)) {
            echo "Posición {$posicion} no válida para {$this->nombrePiloto}<br>";
            return;
        }

        $tabla = [1=>10, 2=>8, 3=>7, 4=>6, 5=>5, 6=>4, 7=>3, 8=>2, 9=>1];
        $puntosGanados = $tabla[$posicion] ?? 0;

        // F3 no suma punto por vuelta rápida
        $this->puntos += $puntosGanados;
    }
}
?>
