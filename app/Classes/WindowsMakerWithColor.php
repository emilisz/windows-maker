<?php

namespace App\Classes;

use App\Interfaces\ColorInterface;
use App\Interfaces\TypeInterface;

class WindowsMakerWithColor extends WindowMaker
{
    public function __construct(protected TypeInterface $type, public ColorInterface $color)
    {
        parent::__construct($type);
    }

    public function install():string
    {
        return "This a ". $this->getMaterial() .". I am ". $this->color->getColor(). PHP_EOL;
    }
}