<?php 
    class Automovil {
        // atributos
        private $color;
        private $patente;
        private $vendido=false;

        // constructor
        function __construct($col, $pat, $vend) {
                $this->color=$col;
                $this->patente=$pat;
                $this->vendido=$vend;
        }

        // getters y setters
        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                //TODO: verificar si el usuario puede modificar el color
                $this->color = $color;

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

        /**
         * Get the value of vendido
         */ 
        public function getVendido()
        {
                return $this->vendido;
        }

        /**
         * Set the value of vendido
         *
         * @return  self
         */ 
        public function setVendido($vendido)
        {
                $this->vendido = $vendido;

                return $this;
        }


        // métodos
        public function arrancar() {
            echo "<p>Arrancó el automóvil de color <span style='color:$this->color'> $this->color </span> con patente $this->patente</p>";
        }



    }
?>