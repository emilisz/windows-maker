<?php
namespace App\Classes\Colors;

use App\Interfaces\ColorInterface;

class Red implements ColorInterface
{
    public function getColor():string
    {
        return 'red';
    }
}