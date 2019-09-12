<?php

class Car
{
    private $color;
    private $nbWheels = 4;
    private $nbSeats;
    private $currentSpeed = 0;
    private $energy = 'fuel';

    public function __construct($color,$nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward():string
    {
        $this->currentSpeed = 50;
        return 'Let \'s go baby ! ' ;
    }

    public function brake():string
    {
        $this->currentSpeed = 0;
        return 'La voiture est arrêtée';
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    /**
     * @return mixed
     */
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * @param mixed $nbSeats
     */
    public function setNbSeats($nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    /**
     * @return mixed
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param mixed $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }



}