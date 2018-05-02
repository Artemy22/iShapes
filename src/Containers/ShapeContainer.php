<?php

namespace Containers;

use Shapes\IShape;


class ShapeContainer implements IShape
{
    /**
     * @var IShape[]
     */
    public $shapesArray = [];

    public function addShape(IShape $newShape)
    {
        $this->shapesArray[] = $newShape;
    }

    public function getPerimeter(): float
    {
        // TODO: Implement getPerimeter() method.
    }

    public function getSquare(): float
    {
        // TODO: Implement getSquare() method.
    }

    public function getName(): string
    {
        return 'SC';
    }
}
