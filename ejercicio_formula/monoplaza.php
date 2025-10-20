<?php
class Monoplaza {
    //Atributos
    private $nombrePiloto;
    private $nacionalidad;
    private $numero;
    private $escuderia;
    private $puntos;

    //Constructor
    public function __construct($nombrePiloto, $nacionalidad, $numero, $escuderia, $puntos) {
        $this->nombrePiloto = $nombrePiloto;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }

    //Getters y Setters
    public function getNombrePiloto() {
        return $this->nombrePiloto;
    }

    public function setNombrePiloto($nombrePiloto) {
        $this->nombrePiloto = $nombrePiloto;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getEscuderia() {
        return $this->escuderia;
    }

    public function setEscuderia($escuderia) {
        $this->escuderia = $escuderia;
    }

    public function getPuntos() {
        return $this->puntos;
    }

    public function setPuntos($puntos) {
        $this->puntos = $puntos;
    }

    public function mostrarInformacion() {
        echo "<strong>Monoplaza #{$this->numero}</strong><br>";
        echo "Piloto: {$this->nombrePiloto}<br>";
        echo "Nacionalidad: {$this->nacionalidad}<br>";
        echo "Escudería: {$this->escuderia}<br>";
        echo "Puntos: {$this->puntos}<br>";
    }
}
?>
