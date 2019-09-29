<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
{
    const ALLOWED_STORAGE = [
        'in filling',
        'full',
    ];

    /**
     * @var string
     */
    private $storage;

    /**
     * @var string
     */
    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function getStorage(): string
    {
        return $this->storage;
    }

    public function setStorage(string $storage): truck
    {
        if (in_array($storage, self::ALLOWED_STORAGE)) {
            $this->storage = $storage;
        }
        return $this;
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