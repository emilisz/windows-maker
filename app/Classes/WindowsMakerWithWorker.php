<?php

namespace App\Classes;

class WindowsMakerWithWorker extends WindowMaker
{

    public function install():string
    {
        return "This a ". $this->getMaterial() .". I was installed by ". $this->type->selectWorker(). PHP_EOL;
    }
}