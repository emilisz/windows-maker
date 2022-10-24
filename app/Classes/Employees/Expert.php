<?php
namespace App\Classes\Employees;

use App\Interfaces\WorkerInterface;

class Expert  implements WorkerInterface
{
    public function getTitle(): string
    {
        return "Plastic window expert";
    }
}