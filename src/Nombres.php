<?php
namespace src;
use Exception;

Class Nombres
{
    private $_nombres;

    public function __construct(string $Nombres)
    {
        $this->_nombres = $this->setNombres($Nombres);
    }

    public function nombres(): string
    {
        return $this->_nombres; 
    }

    private function setNombres(string $Nombres): string
    {
        if(!strlen($Nombres) > 0)
        {
            throw new Exception("El nombre está vacio");
        }
        
        return $Nombres;
    }
}