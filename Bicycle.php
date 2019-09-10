<?php


class Bicycle
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats = 1;

    /**
     * @var integer
     */
    private $nbWheels = 2;

    public function __construct(string $color)
    {
        $this->color = $color;
    }


    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Bicycle
     */
    public function setColor(string $color): string
    {
        $this->color = $color;

        return $this;
    }


    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }


    /**
     * @param int $currentSpeed
     * @return Bicycle
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }

    }


}