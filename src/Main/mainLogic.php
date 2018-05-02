<?php

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере


require_once __DIR__.'/../../vendor/autoload.php';


echo(new Shapes\Triangle(9, 12, 15));
echo(new Shapes\Sphere(4));
echo(new Shapes\Rectangle(2, 6));
echo(new Shapes\Square(8, 8));

