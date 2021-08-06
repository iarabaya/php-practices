<?php
class Cliente {
     /**ATRIBUTOS */
     private $nombre;
     private $apellido;
     private $patenteAuto;
 
     /**GETTERS y SETTERs */
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
      * Get the value of patenteAuto
      */ 
     public function getPatenteAuto()
     {
         return $this->patenteAuto;
     }
 
     /**
      * Set the value of patenteAuto
      *
      * @return  self
      */ 
     public function setPatenteAuto($patenteAuto)
     {
         $this->patenteAuto = $patenteAuto;
 
         return $this;
     }
 
     /**METODOS DE LA CLASE */
     public function comprarAuto (Automovil $auto){
         $patenteAuto = $auto->getPatente();
         echo "<p>El cliente $this->nombre $this->apellido compro el auto con patente $this->patenteAuto </p>";
     }
}

?>