<?php

class Docente {
    private $nombre;
    private $apellido;
    private $edad;
    private $materia;
    private $activo;

    function __construct($nombre, $apellido, $edad, $materia, $activo){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->materia = $materia;
        $this->activo = $activo;
    }

    public function darClase(){
        echo "<h3> Clase de $this->materia en curso.</h3>";
    }

    public function tomarExamen(){
        echo "<h3> Examen de $this->materia en curso.</h3>";
    }

    public function ponerNota(){
        echo "<h3>Pasar notas a Boletin de la materia $this->materia</h3>";
    }
}


class DocenteAux extends Docente {
    private $dedicacionHoraria;
    function __construct($nombre, $apellido, $edad, $materia, $activo,$dedicacionHoraria){
        parent::__construct($nombre, $apellido, $edad, $materia, $activo);
        $this->dedicacionHoraria = $dedicacionHoraria;
    }
    public function tomarAsistencia($nombre){
        echo "<h3>Tomando asistencia <h3>";
    }
}

$docente1 = new Docente("Mirta", "Perez", 35,"matematica", true);
$docente2 = new Docente("Lidia", "Correa", 32, "Literatura", true);

?>