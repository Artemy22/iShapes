<?php

namespace Traits;

use Shapes\IShape;

trait StringableShape
{
    public function __toString()
    {
        /** @var IShape $this */
        return 'Периметр: '.$this->getPerimeter().' Площадь: '.$this->getSquare().'<br>';
    }
}
