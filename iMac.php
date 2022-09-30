<?php
class iMac{
    public const marca="Apple";
    public $software;

    /**
     * Get the value of software
     */ 
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Set the value of software
     *
     * @return  self
     */ 
    public function setSoftware($software)
    {
        $this->software = $software;

        return $this;
    }
    public function getMarca(){
        return $this->marca;
    }
}