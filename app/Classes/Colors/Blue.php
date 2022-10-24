<?php
namespace App\Classes\Colors;

use App\Interfaces\ColorInterface;

class Blue implements ColorInterface
{
    public function getColor():string
    {
        return 'blue';
    }
}