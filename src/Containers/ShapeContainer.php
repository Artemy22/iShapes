<?php

namespace Containers;

use Shapes\IShape;

class ShapeContainer {
    /**
     * @var IShape[]
     */
    public $shapesArray = [];

    public function addShape(IShape $newShape)
    {
        $this->shapesArray[] = $newShape;
    }
}
