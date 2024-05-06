<?php
require 'vendor/autoload.php';
use Ybastuerk\Weather\day;
use Carbon\Carbon;

printf("Now: %s", Carbon::now());


$day23 = new day('03.05.2024','Es regnet');


