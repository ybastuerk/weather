<?php
require 'vendor/autoload.php';
use Ybastuerk\Weather\day;
use Carbon\Carbon;

$weatherHistory = new history();

$day1 = new Wetter("2024-05-06", "Regen");

$weatherHistory->addWeatherData($day1);

echo "Wetter 6. Mai 2024: " . $weatherHistory->getWeatherByDate("2024-05-06")->getBeschreibung();


