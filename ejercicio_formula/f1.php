<?php
class F1 extends Monoplaza {
    private $patrocinador;

    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $patrocinador, $puntos = 0) {
        // Llamamos al constructor de la clase padre
        parent::__construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinador = $patrocinador;
    }

    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 20;
    }

    // Método para otorgar puntos según posición y vuelta rápida
    public function otorgarPuntos($posicion, $vueltaRapida) {
        if (!$this->posicionValida($posicion)) {
            echo " Posición {$posicion} no válida para {$this->nombrePiloto}.<br>";
            return;
        }

        $tabla = [
            1 => 25,
            2 => 18,
            3 => 15,
            4 => 12,
            5 => 10,
            6 => 8,
            7 => 6,
            8 => 4,
            9 => 2,
            10 => 1
        ];

        $puntosGanados = $tabla[$posicion] ?? 0;

        if ($vueltaRapida && $posicion <= 10) {
            $puntosGanados += 1;
        }

        $this->puntos += $puntosGanados;

        echo "{$this->nombrePiloto} obtiene {$puntosGanados} puntos";
        if ($vueltaRapida && $posicion <= 10) echo " +1 por vuelta rápida";
        echo "). Total: {$this->puntos} puntos.<br>";
    }

    public function subirCategoria(bool $tieneSuperlicencia): Monoplaza {
        echo "{$this->nombrePiloto} ya está en la máxima categoría (F1).<br>";
        return $this;
    }
}
?>

