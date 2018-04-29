<?php

error_reporting(E_ALL); // уровень отслеживаемых ошибок
ini_set('display_errors', 1);  //выводить все ошибки в браузере

/**
function myAutoload($className)
{
    $class_pieces = explode('\\', $className);
    $className = implode('/', $class_pieces);
    $str = __DIR__ . '/Ishapes/' .$className.'.php';
    include_once $str;
}
spl_autoload_register('myAutoload');



*/


require __DIR__ . '/../../vendor/autoload.php';




try {
   $triangle = new src\ishapes\Shapes\Triangle(1,2,9);

    $sphere = new src\ishapes\Shapes\Sphere(4);

    $rectangle = new src\ishapes\Shapes\Rectangle(2, 6);

    $square = new src\ishapes\Shapes\Square(8, 8);
} catch (\Exception $exception) {
    echo '<pre>' . $exception->getMessage() . "</pre><br>";
}


