<?php

namespace src\Shapes;

require __DIR__ . '/../../vendor/autoload.php';

use src\InterfaceS\iShape;

class Sphere implements iShape

{
    /** @var float */
    protected $sideR;

    /**
     * Sphere constructor.
     * @param float $sideR
     */
    public function __construct($sideR)
    {
        $this->sideR = $sideR;
    }

    /**
     * @return float
     */
    public function getSideR(): float
    {
        return $this->sideR;
    }

    /**
     * @param float $sideR
     */
    public function setSideR(float $sideR)
    {
        $this->sideR = $sideR;
    }


    public function getPerimeter(): float
    {
        return (2 * M_PI * $this->sideR);
    }

    public function getSquare(): float
    {
        return (M_PI * $this->sideR * $this->sideR);
    }
}
