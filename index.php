<?php

use Kjaster\Weather\history;
use Kjaster\Weather\Wetter;
require 'vendor/autoload.php';

$weatherHistory = new history();

$day1 = new Wetter("2024-05-01", "Sonnig");

$weatherHistory->addWeatherData($day1);

echo "Wetter am 1. Mai 2024: " . $weatherHistory->getWeatherByDate("2024-05-01")->getBeschreibung();

