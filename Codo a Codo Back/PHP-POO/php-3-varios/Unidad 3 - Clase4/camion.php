<?php 
    // include("vehiculo.php"); //sino lo encuentra sigue ejecución
    // require("vehiculo.php"); //sino lo encuentra termina ejecución
    require_once("vehiculo.php"); 

    /**
     * Clase Camión hereda de Vehículo
     */
    class Camion extends Vehiculo {
        private $cargaMaxima; //definido en miles de kilogramos
        private $cantEjes;
        private $tipo;
                              
        function __construct($id, $marca, $modelo, $patente, $cargaMaxima, $cantEjes, $tipo) {
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cargaMaxima=$cargaMaxima;
            $this->cantEjes=$cantEjes;
            $this->tipo=$tipo;
        }

        /**
         * Get the value of cargaMaxima
         */ 
        public function getCargaMaxima()
        {
                return $this->cargaMaxima;
        }

        /**
         * Set the value of cargaMaxima
         *
         * @return  self
         */ 
        public function setCargaMaxima($cargaMaxima)
        {
                $this->cargaMaxima = $cargaMaxima;

                return $this;
        }

        /**
         * Get the value of cantEjes
         */ 
        public function getCantEjes()
        {
                return $this->cantEjes;
        }

        /**
         * Set the value of cantEjes
         *
         * @return  self
         */ 
        public function setCantEjes($cantEjes)
        {
                $this->cantEjes = $cantEjes;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Carga el camión con el peso definido
         * por el parámetro
         * 
         * @param $pesoCarga expreso en miles de kilogramos
         */
        public function cargar($pesoCarga) {
            if($pesoCarga > $this->cargaMaxima) {
                echo "No se puede cargar más de su capacidad máxima: $this->cargaMaxima <br>";
            } else {
                echo "Se cargó exitosamente el camión con $pesoCarga kilogramos<br>";
            }
        }

        public function getValor() {
            echo "entró";
        }

    }

?>