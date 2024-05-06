# Weather
## Config

```php 
namespace Kjaster\Weather;

require 'vendor/autoload.php'
```

PSR-4 autoloading configured. Use "namespace Kjaster\Weather;" in src/
Include the Composer autoloader with: require 'vendor/autoload.php';

## Funktionen

Das Projekt beinhalten zwei Klassen: die history.php und die Wetter.php.
In der Wetter.php werden die Daten eingelesen und in der history.php werden sie abgespeichert. 
Durch Eingabe des Datums kann der bestimmte Tag und deren Daten von der history.php ausgelesen und ausgegeben werden.

```php 
$weatherHistory->getWeatherByDate("2024-05-01")->getBeschreibung(); 
//Der Befehl um die Daten von der history ausgeben zu lassen.
```

Um Daten zu erstellen und in die history einzufügen:

```php
$day1 = new Wetter("2024-05-01", "Sonnig");

$weatherHistory->addWeatherData($day1);
```