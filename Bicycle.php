<?php

require_once 'Vehicle.php';
require_once 'LigthableInterface.php';

class Bicycle extends Vehicle implements LigthableInterface
{
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10)
            return true;
        return false;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }
}
