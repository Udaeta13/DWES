<?php
// Clase abstracta Monoplaza
abstract class Monoplaza {
    protected $nombrePiloto;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

    // Constructor
    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos = 0) {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }

    // Getters
    public function getPuntos() {
        return $this->puntos;
    }

    // Método __toString
    public function __toString() {
        return "{$this->nombrePiloto} ({$this->escuderia}) - {$this->puntos} puntos";
    }

    // Método para otorgar puntos según la posición y si tiene vuelta rápida
    public function otorgarPuntos($posicion, $vueltaRapida) {
    }

    // Método para validar la posición
    public function posicionValida($posicion) {
        return $posicion >= 1 && $posicion <= 10; // por defecto, hasta 10
    }
    
    // Método abstracto para subir de categoría
    public abstract function subirCategoria(bool $tieneSuperlicencia): Monoplaza;
}
?>
