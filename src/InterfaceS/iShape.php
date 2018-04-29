<?php
namespace src\InterfaceS;

require __DIR__ . '/../../vendor/autoload.php';

interface iShape
{
    public function getPerimeter(): float;

    public function getSquare(): float;
}

