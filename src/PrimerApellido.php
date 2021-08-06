<?php
namespace src;
use Exception;

Class PrimerApellido
{
    private $_apellido;

    public function __construct(string $Apellido)
    {
        $this->_apellido = $this->setApellido($Apellido);  
    }

    public function primerApellido(): string
    {
        return $this->_apellido; 
    }

    private function setApellido($Apellido): string
    {
        if(!strlen($Apellido) > 0)
        {
            throw new Exception("El primer apellido está vacio");
        }
        
        return $Apellido;
    }
}