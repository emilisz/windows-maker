<?php

namespace App\Classes;

use App\Interfaces\ColorInterface;
use App\Interfaces\TypeInterface;

class WindowMaker
{
    public function __construct(protected TypeInterface $type, protected ColorInterface $color)
    {
    }

    public function install():void
    {
        echo " This a ". $this->type->getTitle() .". I was installed by ". $this->type->selectWorker().". I am ". $this->color->getColor(). PHP_EOL;
    }
}