<?php

namespace App\Classes;
use App\Interfaces\TypeInterface;
use App\Classes\Employees\Expert;

class PlasticWindow implements TypeInterface
{
    protected object $worker;
    public function __construct()
    {
        $this->worker = new Expert();
    }

    public function getTitle():string
    {
        return 'aluminum window';
    }

    public function selectWorker():string
    {
        return $this->worker->getTitle();
    }
}