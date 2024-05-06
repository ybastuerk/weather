<?php

namespace Ybastuerk\Weather;
use Ybastuerk\Weather\day;
class Historygang{

    private $weatherData = [];

    public function addWeatherData(Wetter $weather) {
        $date = $weather->getDate();
        $this->weatherData[$date] = $weather;
    }

    public function getWeatherByDate($date) {
        if (array_key_exists($date, $this->weatherData)) {
            return $this->weatherData[$date];
        }
        else {
            return "Hier gibt es nichts zu sehen";
        }
    }




}
