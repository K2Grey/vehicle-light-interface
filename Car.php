<?php

require_once 'Vehicle.php';
require_once 'LigthableInterface.php';

class Car extends Vehicle implements LigthableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    protected $energy;

    /**
     * @var integer
     */
    protected $energyLevel;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        return $this;
    }

    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
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
     * @return $this
     */
    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     * @return $this
     */
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }
}
