<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\AluminumWindow;
use App\Classes\Colors\Red;
use App\Classes\PlasticWindow;
use App\Classes\WindowsMakerWithColor;
use App\Classes\WindowsMakerWithWorker;

//PART 1
$t = new WindowsMakerWithWorker(new AluminumWindow());
echo $t->install();
//PART 2
$a = new WindowsMakerWithColor(new PlasticWindow(),new Red());
echo $a->install();
