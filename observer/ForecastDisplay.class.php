<?php
class ForecastDisplay implements Observer
{
    private $currentPressure = 29.92; 
    private $lastPressure;
    private $weatherData;

    public function __construct ($weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update ($temperature, $humidity, $pressure)
    {
        $this->lastPressure = $this->currentPressure;
        $this->currentPressure = $pressure;
        $this->display();
    }

    public function display ()
    {
        echo 'Forecast: ';
        if ($this->currentPressure > $this->lastPressure) {
            echo 'Imroving weather on the way<br/>'; 
        } elseif ($this->currentPressure == $this->lastPressure) {
            echo 'More of the same<br/>'; 
        } elseif ($this->currentPressure < $this->lastPressure) {
            echo 'Watch out for cooler, rainy weather<br/>';
        }
    }
}
