<?php

namespace Shapes;

interface IShape
{
    public function getPerimeter(): float;

    public function getSquare(): float;

    public function getName(): string;
}

