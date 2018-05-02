<?php

namespace Traits;

use Shapes\IShape;

trait StringableShape
{
    public function getName(): string
    {
        $array = explode('\\', self::class);

        return $array[count($array) - 1];
    }

    public function __toString()
    {
        /** @var IShape $this */
        return  "<table style='background: antiquewhite' border='1'><tr style='background: green'><th>".$this->getName()."</th><th>Периметр:</th><th>".$this->getPerimeter()."</th><th>Площадь:</th><th>".$this->getSquare()."</th></tr>";
    }
}
