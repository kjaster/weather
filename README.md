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