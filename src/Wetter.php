<?php

namespace Kjaster\Weather;

class Wetter
{
    private $date;
    private $beschreibung;

    public function __construct($date, $beschreibung) {
        $this->date = $date;
        $this->beschreibung = $beschreibung;
    }

    public function getDate() {
        return $this->date;
    }

    public function getBeschreibung() {
        return $this->beschreibung;
    }
}

