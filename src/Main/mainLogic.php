<?php

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере


require_once __DIR__.'/../../vendor/autoload.php';


$triangle = new Shapes\Triangle(1, 2, 9);
echo "Периметр треугольника: ".$triangle->getPerimeter();
echo "<br>";
echo "Площадь треугольника: ".$triangle->getSquare();
echo "<hr>";
$sphere = new Shapes\Sphere(4);
echo "Периметр круга: ".$sphere->getPerimeter();
echo "<br>";
echo "Площадь круга: ".$sphere->getSquare();
echo "<hr>";
$rectangle = new Shapes\Rectangle(2, 6);
echo "Периметр прямоугольника: ".$rectangle->getPerimeter();
echo "<br>";
echo "Площадь прямоугольника: ".$rectangle->getSquare();
echo "<hr>";
$square = new Shapes\Square(8, 8);
echo "Периметр квадрата: ".$square->getPerimeter();
echo "<br>";
echo "Площадь квадрата: ".$square->getSquare();

