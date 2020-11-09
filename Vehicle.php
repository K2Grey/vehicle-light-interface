<?php


abstract class Vehicle
{
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
     */
    protected $currentSpeed;

    /**
     * @var integer
     */
    protected $nbSeats;

    /**
     * @var integer
     */
    protected $nbWheels;

    /**
     * Vehicle constructor.
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color, int $nbSeats)
    {
        $this->setColor($color);
        $this->setNbSeats($nbSeats);
        return $this;
    }

    /**
     * @return string
     */
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    /**
     * @return string
     */
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

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     * @return $this
     */
    public function setCurrentSpeed(int $currentSpeed)
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
        return $this;
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
     * @return $this
     */
    public function setColor(string $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @param int $nbSeats
     * @return $this
     */
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;
        return $this;
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
     * @return $this
     */
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;
        return $this;
    }
}
