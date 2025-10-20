<?php
class F1 extends Monoplaza {
    private $patrocinador;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $patrocinador, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinador = $patrocinador;
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

        if ($vueltaRapida && $posicion <= 10) $puntosGanados += 1;

        $this->puntos += $puntosGanados;
    }
}
?>
