<?php
class Coche
{
    private $color;
    private $marca;
    private $modelo;
    private $velocidad;
    private $caballaje;
    private $plazas;



    function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }
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
        $this->color = $color;
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
    }

    /**
     * Get the value of velocidad
     */
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    /**
     * Set the value of velocidad
     *
     * @return  self
     */
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }

    /**
     * Get the value of caballaje
     */
    public function getCaballaje()
    {
        return $this->caballaje;
    }

    /**
     * Set the value of caballaje
     *
     * @return  self
     */
    public function setCaballaje($caballaje)
    {
        $this->caballaje = $caballaje;
    }

    /**
     * Get the value of plazas
     */
    public function getPlazas()
    {
        return $this->plazas;
    }

    /**
     * Set the value of plazas
     *
     * @return  self
     */
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }
    //FUNCIONES
    /**
     * Metodo que incrementa la velocidad en 1
     */
    public function acelerar()
    {
        $this->velocidad++;
    }
    /**
     * Metodo que disminuye la velocidad en 1
     */
    public function frenar()
    {
        $this->velocidad--;
    }
    /**
     * Metodo que muestra la velocidad del coche
     *      
     * */
    public function velocimetro()
    {
        return print("La velocidad es de; " . $this->velocidad);
    }
    /**
     * Metodo que muestra toda la informacion del coche
     */
    public function muestraCoche($coche)
    {
        $x = false;
        if ($coche instanceof Coche && !empty($coche)){
            $x = true;
            echo ("Falso, no es coche o esta vacio");
        }//else{
         //   return print("Hola, soy un: " . $coche->getMarca() . ", con modelo: " . $coche->getModelo() . " , tengo una velocidad de: " . $coche->getVelocidad() . " mi caballaje es de: " . $coche->getCaballaje() . " y tengo : " . $coche->getPlazas() . " plazas.");
        //}
    }
} 
?>
