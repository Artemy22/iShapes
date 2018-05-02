<?php

namespace Shapes;

use InterfaceS\IShape;

class Rectangle implements IShape
{

    /** @var float */
    protected $sideA;

    /** @var float */
    protected $sideB;

    /**
     * Rectangle constructor.
     * @param float $sideA
     * @param float $sideB
     */
    public function __construct($sideA, $sideB)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }

    /**
     * @return float
     */
    public function getSideA(): float
    {
        return $this->sideA;
    }

    /**
     * @param float $sideA
     */
    public function setSideA(float $sideA)
    {
        $this->sideA = $sideA;
    }

    /**
     * @return float
     */
    public function getSideB(): float
    {
        return $this->sideB;
    }

    /**
     * @param float $sideB
     */
    public function setSideB(float $sideB)
    {
        $this->sideB = $sideB;
    }

    public function getPerimeter(): float
    {
        return ($this->sideA * 2 + $this->sideB * 2);
    }

    public function getSquare(): float
    {
        return ($this->sideA * $this->sideB);
    }
}