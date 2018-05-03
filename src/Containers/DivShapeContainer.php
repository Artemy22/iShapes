<?php

namespace Containers;

use Shapes\IShape;

class DivShapeContainer implements IShape
{
    /** @var IShape */
    public $shape1;

    /** @var  IShape */
    public $shape2;

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

    /**
     * @return float
     */

    public function getPerimeter(): float
    {
        $shapeDifPer = $this->shape1->getPerimeter() - $this->shape2->getPerimeter();
        return $shapeDifPer;
    }


    public function getSquare(): float
    {
        $shapeDifSq = $this->shape1->getSquare() - $this->shape2->getSquare();
        return $shapeDifSq;
    }

    public function getName(): string
    {
        return "CD"; // TODO: Implement getName() method.
    }

}
