<?php
class FAcademy extends Monoplaza {
    private $potenciaMax;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $potenciaMax, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMax = $potenciaMax;
    }

    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 18;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        if (!$this->posicionValida($posicion)) {
            echo "Posición {$posicion} no válida para {$this->nombrePiloto}<br>";
            return;
        }

        $tabla = [1=>18, 2=>15, 3=>12, 4=>10, 5=>8, 6=>6, 7=>4, 8=>2, 9=>1];
        $puntosGanados = $tabla[$posicion] ?? 0;

        if ($vueltaRapida && $posicion <= 10) {
            $puntosGanados += 1;
        }

        $this->puntos += $puntosGanados;
    }

    public function subirCategoria(bool $tieneSuperlicencia): Monoplaza {
        echo "⬆️ {$this->nombrePiloto} asciende de FAcademy a F4.<br>";
        return new F4(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            "España", // país por defecto de la F4
            $this->puntos
        );
    }
}
?>

