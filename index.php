<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Classes\WindowMaker;
use App\Classes\AluminumWindow;
use App\Classes\PlasticWindow;
use App\Classes\Colors\Brown;
use App\Classes\Colors\Red;


$t = new WindowMaker(new AluminumWindow(), new Brown());
$t->install();
$a = new WindowMaker(new PlasticWindow(), new Red());
$a->install();
