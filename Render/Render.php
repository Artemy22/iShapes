<?php

namespace Render;


use Shapes\IShape;

class Render
{
    /** @var  IShape[] */
    protected $shapes;

    /**
     * Render constructor.
     * @param IShape[] $shapes
     */
    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    public function render(){
        foreach ($this->shapes as $shape){
            echo $shape;
        }
    }

}