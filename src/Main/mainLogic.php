<?php

use Containers\DivShapeContainer;
use Containers\ShapeContainer;

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере

require_once __DIR__.'/../../vendor/autoload.php';

$triangle1 = new Shapes\Triangle(9, 12, 15);

$sphere1 = new Shapes\Sphere(4);

$rectangle1 = new Shapes\Rectangle(2, 6);

$rectangle2 = new Shapes\Rectangle(22, 16);

$square1 = new Shapes\Square(8, 8);


/*$container1 = new DivShapeContainer($triangle1, $sphere1);
foreach ($container1 as $key => $value) {
    echo $key." =>> ".$value;
}
echo "Разница в площадях: ".$container1->getSquare();
echo "<br>";
echo "Разница в периметрах: ".$container1->getPerimeter(); */


$container2 = new ShapeContainer();
$container2->addShape($triangle1);
$container2->addShape($square1);
$container2->addShape($sphere1);
$container2->addShape($rectangle1);
$container2->addShape($rectangle2);

foreach ($container2 as $key => $value) {
    foreach ($value as $key1 => $value1) {

        echo $value1;

    }
}




//var_dump($container2);
//print_r($container2);

