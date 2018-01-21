<?php

namespace AppBundle\Entity;

class NoCargado
{
    public $nombre;
    public $apellido;
    public $ficha;
    public $dni;
    public $motivo;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setFicha($ficha)
    {
        $this->ficha = $ficha;

        return $this;
    }

    public function getFicha()
    {
        return $this->ficha;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getMotivo()
    {
        return $this->motivo;
    }

}

