<?php


namespace Containers;

use InterfaceS\IShape;

class ShapeContainer implements IShape
{
    public function getSquare(): float
    {
        // TODO: Implement getSquare() method.
    }

    public function getPerimeter(): float
    {
        // TODO: Implement getPerimeter() method.
    }

    /**
     * @var string[]
     */
    public $shapesArray = ['Triangle', 'Square', 'Sphere', 'Rectangle'];

    public function addShape(string $newShape)
    {
        $this->shapesArray[] = $newShape;
    }
}
