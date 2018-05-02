<?php


namespace Shapes;

use Traits\StringableShape;

/**
 * Реализация интерфейса
 */
class Triangle implements IShape
{
    use StringableShape;

    /** @var float */
    protected $sideA;

    /** @var float */
    protected $sideB;

    /** @var float */
    protected $sideC;

    /**
     * triangle constructor.
     * @param float $sideA
     * @param float $sideB
     * @param float $sideC
     */
    public function __construct(float $sideA, float $sideB, float $sideC)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    public function getSideA(): float
    {
        return $this->sideA;
    }

    public function setSideA(float $sideA): Triangle
    {
        $this->sideA = $sideA;

        return $this;
    }

    public function getSideB(): float
    {
        return $this->sideB;
    }

    public function setSideB(float $sideB): Triangle
    {
        $this->sideB = $sideB;

        return $this;
    }

    public function getSideC(): float
    {
        return $this->sideC;
    }

    /**
     * @param float $sideC
     * @return Triangle
     */
    public function setSideC(float $sideC): Triangle
    {
        $this->sideC = $sideC;

        return $this;
    }

    public function getPerimeter(): float
    {
        return $this->sideA + $this->sideB + $this->sideC;
    }

    public function getSquare(): float
    {
        $p = ($this->sideA + $this->sideB + $this->sideC) / 2;

        return sqrt($p * ($p - $this->sideA) * ($p - $this->sideB) * ($p - $this->sideC));
    }

    /*public function getName(): string
    {
        return 'MEGA TRIANGLE !!!';
    }*/
}
