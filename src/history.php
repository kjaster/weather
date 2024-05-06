<?php

namespace Kjaster\Weather;

class history{

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
            return "Keine Wetterdaten vorhanden.";
        }
    }
}