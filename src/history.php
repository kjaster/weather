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
            return $this->weatherData[$date]->getBeschreibung();
        }
        else {
            return "Keine Wetterdaten für dieses Datum vorhanden.";
        }
    }
}