<?php
class F4 extends Monoplaza {
    private $paisCategoria;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $paisCategoria, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->paisCategoria = $paisCategoria;
    }

    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 30;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        if (!$this->posicionValida($posicion)) {
            echo "Posición {$posicion} no válida para {$this->nombrePiloto}<br>";
            return;
        }

        $tabla = [1=>25, 2=>18, 3=>15, 4=>12, 5=>10, 6=>8, 7=>6, 8=>4, 9=>2, 10=>1];
        $puntosGanados = $tabla[$posicion] ?? 0;

        $this->puntos += $puntosGanados;
    }

    public function subirCategoria(bool $tieneSuperlicencia): Monoplaza {
        echo "{$this->nombrePiloto} sube de F4 a F3.<br>";
        return new F3(
            $this->nombrePiloto,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            "Academia Red Bull",
            $this->puntos
        );
    }
}
?>

