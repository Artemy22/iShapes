<?php

use Containers\DivShapeContainer;
use Containers\ShapeContainer;

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере

require_once __DIR__.'/../../vendor/autoload.php';

$triangle1 = new Shapes\Triangle(9, 12, 15);
echo $triangle1;
$sphere1 = new Shapes\Sphere(4);
echo $triangle1;
$rectangle1 = new Shapes\Rectangle(2, 6);
echo $rectangle1;
$square1 = new Shapes\Square(8, 8);
echo $square1;

$container1 = new DivShapeContainer($triangle1, $sphere1);
foreach ($container1 as $key => $value) {
    echo $key." =>> ".$value;
}
echo "Разница в площадях: ".$container1->getSquare();
echo "<br>";
echo "Разница в периметрах: ".$container1->getPerimeter();
$container2 = new ShapeContainer();

$container2->addShape($triangle1);
