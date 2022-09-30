<?php
class Configuracion
{
    public static $color;
    public static $newsletter;
    public static $entorno;

    function __construct($color, $newsletter, $entorno)
    {
        $this->color = $color;
        $this->newsletter = $newsletter;
        $this->entorno = $entorno;
    }
    /**
     * Get the value of color
     */
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public static function setColor($color)
    {
        self::$color = $color;
    }

    /**
     * Get the value of newsletter
     */
    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * Set the value of newsletter
     *
     * @return  self
     */
    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    /**
     * Get the value of entorno
     */
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * Set the value of entorno
     *
     * @return  self
     */
    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }
    public static function mostrar(){
        return print("Este es mi color: ".self::$color. ", mi newsletter: ".self::$newsletter." y mi entorno: ".self::$entorno);
    }
}
