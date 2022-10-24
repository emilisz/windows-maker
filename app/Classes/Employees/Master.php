<?php
namespace App\Classes\Employees;

use App\Interfaces\WorkerInterface;

class Master implements WorkerInterface
{
    public function getTitle(): string
    {
        return "Aluminum window master";
    }
}