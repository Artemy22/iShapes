<?php

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере


require_once __DIR__.'/../../vendor/autoload.php';


try {
    $triangle = new Shapes\Triangle(1, 2, 9);

    $sphere = new Shapes\Sphere(4);

    $rectangle = new Shapes\Rectangle(2, 6);

    $square = new Shapes\Square(8, 8);
} catch (\Exception $exception) {

    echo '<pre>'.$exception->getMessage()."</pre><br>";

}
