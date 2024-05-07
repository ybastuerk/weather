<?php
namespace Ybastuerk\Weather;

class history{

    private array $weatherData = [];


    public function addWeatherData(day $weather) {
        $days = $weather->getDate();

        return $this->weatherData[$days] = $weather;
    }

    public function getWeatherByDate($days) {
        if (array_key_exists($days, $this->weatherData)) {
            return $this->weatherData[$days];

        }
        else {
            return "Hier gibt es nichts zu sehen";
        }
    }




}
