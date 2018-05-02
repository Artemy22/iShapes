<?php

namespace Traits;

use InterfaceS\IShape;

trait StringableShape
{
    public function __toString()
    {
        /** @var IShape $this */
        return 'perimeter: '.$this->getPerimeter().' square: '.$this->getSquare().'<br>';
    }
}