<?php
require_once 'autoload.php';

class WeatherStation
{
    private $weatherData;
    private $currentDisplay;
    private $forecastDisplay;
    private $statisticsDisplay;
    private $heatIndexDisplay;

    public function __construct ()
    {
        $this->weatherData = new WeatherData();    
        $this->currentDisplay = new CurrentConditionsDisplay($this->weatherData);
        $this->forecastDisplay = new ForecastDisplay($this->weatherData);
        $this->statisticsDisplay = new StatisticsDisplay($this->weatherData);
        $this->heatIndexDisplay = new HeatIndexDisplay($this->weatherData);
        $this->test();
    }

    public function test ()
    {
        $this->weatherData->setMeasurements(80, 65, 30.4);
        echo '<br/>';
        $this->weatherData->setMeasurements(82, 70, 29.2);
        echo '<br/>';
        $this->weatherData->setMeasurements(78, 90, 29.2);
        echo '<br/>';
        $this->weatherData->removeObserver($this->currentDisplay);
        echo '<br/>';
        $this->weatherData->setMeasurements(60, 100, 25.2);
        echo '<br/>';

    }
}

$obj = new WeatherStation();
