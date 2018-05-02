<?php

namespace Containers;

use Shapes\IShape;

class DivShapeContainer implements IShape
{
    /** @var IShape*/
    private $shape1;

    /** @var  IShape */
    private $shape2;

    /**
     * DivShapeContainer constructor.
     * @param IShape $shape1
     * @param IShape $shape2
     */
    public function __construct(IShape $shape1, IShape $shape2)
    {
        $this->shape1 = $shape1;
        $this->shape2 = $shape2;
    }

    public function getPerimeter(): float
    {

    }

    public function getSquare(): float
    {

    }
}
