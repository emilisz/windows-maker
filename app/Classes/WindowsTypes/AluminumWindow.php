<?php

namespace App\Classes;
use App\Interfaces\TypeInterface;
use App\Classes\Employees\Master;

class AluminumWindow  implements TypeInterface
{
    protected object $worker;
    public function __construct()
    {
        $this->worker = new Master();
    }

    public function getTitle():string
    {
        return 'plastic window';
    }

    public function selectWorker():string
    {
        return $this->worker->getTitle();
    }
}