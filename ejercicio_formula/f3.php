<?php
class F3 extends Monoplaza {
    private $academia;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $academia, $puntos = 0) {
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->academia = $academia;
    }

    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 30;
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        if (!$this->posicionValida($posicion)) {
            echo "Posición {$posicion} no válida para {$this->nombrePiloto}<br>";
            return;
        }

        $tabla = [1=>10, 2=>8, 3=>7, 4=>6, 5=>5, 6=>4, 7=>3, 8=>2, 9=>1];
        $puntosGanados = $tabla[$posicion] ?? 0;

        $this->puntos += $puntosGanados;
    }

    public function subirCategoria(bool $tieneSuperlicencia): Monoplaza {
        if ($tieneSuperlicencia) {
            echo "{$this->nombrePiloto} sube de F3 a F2.<br>";
            return new F2(
                $this->nombrePiloto,
                $this->nacionalidad,
                $this->numero,
                $this->escuderia,
                $tieneSuperlicencia,
                $this->puntos
            );
        } else {
            echo "{$this->nombrePiloto} no tiene los puntos suficientes de superlicencia para subir a F2.<br>";
            return $this;
        }
    }
}
?>

