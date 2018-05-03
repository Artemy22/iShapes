<?php

namespace Containers;

use Shapes\IShape;

class ShapeContainer implements IShape
{
    /**
     * @var IShape[]
     */
    protected $shapesArray = [];

    /**
     * @return IShape[]
     */
    public function getShapes(): array
    {
        return $this->shapesArray;
    }


    public function addShape(IShape $newShape)
    {
        $this->shapesArray[] = $newShape;
    }

    public function getPerimeter(): float
    {
        $sumPerimeter = 0;
        foreach ($this->shapesArray as $shape) {
            $sumPerimeter += $shape->getPerimeter();
        }

        return $sumPerimeter;
    }

    public function getSquare(): float
    {
        $sumSquare = 0;
        foreach ($this->shapesArray as $shape) {
            $sumSquare += $shape->getSquare();
        }

        return $sumSquare;
    }

    public function getName(): string
    {
        return 'SC';
    }
}
