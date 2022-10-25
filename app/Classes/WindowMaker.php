<?php

namespace App\Classes;

use App\Interfaces\TypeInterface;

class WindowMaker
{
    public function __construct(protected TypeInterface $type)
    {
    }

    public function getMaterial()
    {
        return $this->type->getTitle();
    }


}