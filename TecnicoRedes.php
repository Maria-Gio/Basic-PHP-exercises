<?php
class TecnicoRedes extends Informatico{
    private $auditarredesexpienciaredes;
    
    function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador,$auditarredesexpienciaredes)
    {
        parent::__construct($nombre, $apellido, $altura, $edad,$lenguajes, $experienciaProgramador, $auditarredesexpienciaredes);
        $this->auditarredesexpienciaredes=$auditarredesexpienciaredes;
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }
    /**
     * Get the value of auditarredesexpienciaredes
     */ 
    public function getAuditarredesexpienciaredes()
    {
        return $this->auditarredesexpienciaredes;
    }

    /**
     * Set the value of auditarredesexpienciaredes
     *
     * @return  self
     */ 
    public function setAuditarredesexpienciaredes($auditarredesexpienciaredes)
    {
        $this->auditarredesexpienciaredes = $auditarredesexpienciaredes;

    }

    //FUNCIONES
    public function auditaRedes($tecnicoRedes){
        return print("Soy " . $tecnicoRedes->getNombre() . " y estoy auditando redes");
    }
}