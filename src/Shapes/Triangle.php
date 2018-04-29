<?php


namespace src\Shapes;

require __DIR__ . '/../../vendor/autoload.php';

use src\InterfaceS\iShape;
/**
 * Реализация интерфейса
 */
class Triangle implements iShape
{
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

    /**
     * @return float
     */
    public function getSideA(): float
    {
        return $this->sideA;
    }

    /**
     * @param float $sideA
     * @return Triangle
     */
    public function setSideA(float $sideA): Triangle
    {
        $this->sideA = $sideA;

        return $this;
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
     * @return Triangle
     */
    public function setSideB(float $sideB): Triangle
    {
        $this->sideB = $sideB;

        return $this;
    }

    /**
     * @return float
     */
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
        $p = 0.5 * ($this->sideA + $this->sideB + $this->sideC);

        return sqrt($p * ($p - $this->sideA) * ($p - $this->sideB) * ($p - $this->sideC));
    }
}
