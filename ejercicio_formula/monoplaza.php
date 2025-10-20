<?php
class Monoplaza {
    //Atributos
    protected $nombrePiloto;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

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

    public function __toString() {
        return "{$this->nombrePiloto} ({$this->escuderia}) - {$this->puntos} puntos";
    }

    public function otorgarPuntos($posicion, $vueltaRapida) {
        // Este método se redefine en las clases hijas
    }

}
?>
