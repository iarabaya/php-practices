<?php   
    require_once("Cuenta.php");

    class Cliente {
        private $id;
        private $nombre;
        private $apellido;
        private $cuenta;

        function __construct($id, $nombre, $apellido, Cuenta $cuenta){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->cuenta=$cuenta;
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
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of cuenta
         */ 
        public function getCuenta()
        {
                return $this->cuenta;
        }

        /**
         * Set the value of cuenta
         *
         * @return  self
         */ 
        public function setCuenta($cuenta)
        {
                $this->cuenta = $cuenta;

                return $this;
        }

        public function mostrarSaldo() {
            $saldo = $this->cuenta->getSaldo();
            echo "El saldo de la cuenta de $this->nombre, $this->apellido es: $saldo <br>";
        }
    }

?>