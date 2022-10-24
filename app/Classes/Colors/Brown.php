<?php
namespace App\Classes\Colors;

use App\Interfaces\ColorInterface;

class Brown implements ColorInterface
{
    public function getColor():string
    {
        return 'brown';
    }
}