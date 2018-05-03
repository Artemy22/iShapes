<?php

use Containers\DivShapeContainer;
use Containers\ShapeContainer;
use Traits\StringableShape;

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере

require_once __DIR__.'/../../vendor/autoload.php';

$triangle1 = new Shapes\Triangle(9, 12, 15);
$sphere1 = new Shapes\Sphere(4);
$rectangle1 = new Shapes\Rectangle(22, 16);
$square1 = new Shapes\Square(8, 8);


$triangle2 = new Shapes\Triangle(9, 12, 15);
$sphere2 = new Shapes\Sphere(45);
$rectangle2 = new Shapes\Rectangle(29, 26);
$square2 = new Shapes\Square(18, 18);


$triangle3 = new Shapes\Triangle(9, 12, 15);
$sphere3 = new Shapes\Sphere(84);
$rectangle3 = new Shapes\Rectangle(32, 16);
$square3 = new Shapes\Square(80, 80);


$container1 = new ShapeContainer();
$container1->addShape($triangle1);
$container1->addShape($square1);
$container1->addShape($sphere1);
$container1->addShape($rectangle1);

$container2 = new ShapeContainer();
$container2->addShape($square2);
$container2->addShape($rectangle2);
$container2->addShape($sphere2);
$container2->addShape($triangle2);

$container3 = new ShapeContainer();
$container3->addShape($square3);
$container3->addShape($rectangle3);
$container3->addShape($sphere3);
$container3->addShape($triangle3);

foreach ($container1->getShapes() as $value)
     {
        echo $value;
    }foreach ($container2->getShapes() as $value)
     {
        echo $value;
    }foreach ($container3->getShapes() as $value)
     {
        echo $value;
    }