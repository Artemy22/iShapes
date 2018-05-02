<?php

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере


require __DIR__.'/../../vendor/autoload.php';


try {
    $triangle = new src\Shapes\Triangle(1, 2, 9);

    $sphere = new src\Shapes\Sphere(4);

    $rectangle = new src\Shapes\Rectangle(2, 6);

    $square = new src\Shapes\Square(8, 8);
} catch (\Exception $exception) {

    echo '<pre>'.$exception->getMessage()."</pre><br>";

}
