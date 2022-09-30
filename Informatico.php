<?php
class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    function __construct($nombre, $apellido, $altura, $edad, $lenguajes, $experienciaProgramador)
    {
        parent::__construct($nombre, $apellido, $altura, $edad);
        $this->lenguajes = $lenguajes;
        $this->experienciaProgramador = $experienciaProgramador;
    }



    /**
     * Get the value of caracteristicas
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    /**
     * Set the value of caracteristicas
     *
     * @return  self
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;
    }

    /**
     * Get the value of lenguajes
     */
    public function getLenguajes()
    {
        return $this->lenguajes;
    }

    /**
     * Set the value of lenguajes
     *
     * @return  self
     */
    public function setLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;
    }

    /**
     * Get the value of experienciaProgramador
     */
    public function getExperienciaProgramador()
    {
        return $this->experienciaProgramador;
    }

    /**
     * Set the value of experienciaProgramador
     *
     * @return  self
     */
    public function setExperienciaProgramador($experienciaProgramador)
    {
        $this->experienciaProgramador = $experienciaProgramador;
    }
    public function programar($informatico)
    {
        return print("Soy " . $informatico->getNombre() . " y estoy programando");
    }
    public function repararOrdenador($informatico)
    {
        return print("Soy " . $informatico->getNombre() . " y estoy reparando ordenadores");
    }
    public function hacerOfimatica($informatico)
    {
        return print("Soy " . $informatico->getNombre() . " y estoy haciendo ofimática");
    }
    //programar, repararordenador, hacerofimática.

}
