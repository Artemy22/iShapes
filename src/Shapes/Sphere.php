<?php

namespace Shapes;

use Traits\StringableShape;

class Sphere implements IShape

{
    use StringableShape;
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
