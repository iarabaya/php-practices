<?php 
    require_once("vehiculo.php");

    /**
     * Clase omnibus
     */
    class Omnibus extends Vehiculo {
        private $cantAsientos;
        private $cantPisos;
        private $tipo;

        function __construct($id, $marca, $modelo, $patente, $cantAsientos, $cantPisos, $tipo){
            parent::__construct($id, $marca, $modelo, $patente);
            $this->cantAsientos=$cantAsientos;
            $this->cantPisos=$cantPisos;
            $this->tipo=$tipo;
        }


        /**
         * Get the value of cantAsientos
         */ 
        public function getCantAsientos()
        {
                return $this->cantAsientos;
        }

        /**
         * Set the value of cantAsientos
         *
         * @return  self
         */ 
        public function setCantAsientos($cantAsientos)
        {
                $this->cantAsientos = $cantAsientos;

                return $this;
        }

        /**
         * Get the value of cantPisos
         */ 
        public function getCantPisos()
        {
                return $this->cantPisos;
        }

        /**
         * Set the value of cantPisos
         *
         * @return  self
         */ 
        public function setCantPisos($cantPisos)
        {
                $this->cantPisos = $cantPisos;

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
         * Este método asigna una cantidad
         * fija de asientos
         * 
         * @param $asientos cantidad de asientos a ocupar
         */
        public function asignarAsientos($asientos) {
            if($this->validarAsignacion($asientos)) {
                echo "Se ocuparon exitosamente $asientos asientos <br>";
            } else {
                echo "No se puede ocupar más de la cantidad de asientos: $this->cantAsientos <br>";
            }
        }

        /**
         * Private solo puede invocarse dentro de la clase
         */
        private function validarAsignacion($asientos) {
            return $asientos <= $this->cantAsientos;    
        }

        public function apagarCamion() {
                $this->apagar();
        }
    }

?>