<?php 
    class Omnibus extends Vehiculo {
        private $cantAsientos;

        function __construct($id, $marca, $modelo, $patente, $cantAsientos){
            parent::__construct($id, $marca, $modelo, $patente); //se construyel la clase padre vehiculo
            $this->cantAsientos=$cantAsientos;
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
         * Este método asigna una cantidad
         * fija de asientos
         * 
         * @param $asientos cantidad de asientos a ocupar
         */
        public function asignarAsientos($asientos) {
            if($asientos < $this->cantAsientos) {
                echo "Se ocuparon exitosamente $asientos asientos <br>";
            } else {
                echo "No se puede ocupar más de la cantidad de asientos: $this->cantAsientos <br>";
            }
        }        
    }
?>