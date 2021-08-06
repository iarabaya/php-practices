<?php 
    class Vehiculo {
        private $id;
        private $marca;
        private $modelo;
        private $patente;
        
        function __construct($id, $marca, $modelo, $patente) {
            $this->id=$id;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->patente=$patente;            
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
                $this->marca = $marca;

                return $this;
        }

        /**
         * Get the value of modelo
         */ 
        public function getModelo()
        {
                return $this->modelo;
        }

        /**
         * Set the value of modelo
         *
         * @return  self
         */ 
        public function setModelo($modelo)
        {
                $this->modelo = $modelo;

                return $this;
        }

        /**
         * Get the value of patente
         */ 
        public function getPatente()
        {
                return $this->patente;
        }

        /**
         * Set the value of patente
         *
         * @return  self
         */ 
        public function setPatente($patente)
        {
                $this->patente = $patente;

                return $this;
        }

        public function arrancar() {
            echo "Arrancó el vehículo con patente $this->patente <br>";
        
        }

        protected function apagar() {
            echo "Se apagó el vehículo con patente $this->patente <br>";    
        }

        //abstract protected function getValor();

    }    

?>