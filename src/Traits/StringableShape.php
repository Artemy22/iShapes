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
        $getName = $this->getName();
        $getPerimeter = $this->getPerimeter();
        $getSquare = $this->getSquare();


        return '
<table style="background: antiquewhite" border cellspacing="0">
<tr style="background: gray">
<th width = "150px" align="left">Тип фигуры</th><td width = "100px">'.$getName.'</td>
<th width = "150px" align="left">Периметер фигуры</th><td width = "100px" align="center">'.round($getPerimeter ).'</td>
<th width = "150px" align="left">Площадь фигуры:</th><td width = "100px" align="center">'.round($getSquare).'</td>
</tr></table>';
    }
}
