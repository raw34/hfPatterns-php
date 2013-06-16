<?php
class WeatherData implements Subject
{
    private $observers;
    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct ()
    {
       $this->observers = array(); 
    }

    public function registerObserver ($o)
    {
        array_push($this->observers, $o);
    }

    public function removeObserver ($o)
    {
        $i = array_search($o, $this->observers);
        if ($i >= 0) {
           unset($this->observers[$i]); 
        }
    }

    public function notifyObservers ()
    {
        foreach ($this->observers as $k => $v) {
           $v->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged ()
    {
        $this->notifyObservers();
    }

    public function setMeasurements ($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure; 
        $this->measurementsChanged();
    }

    public function getTemperature ()
    {
       return $this->temperature; 
    }

    public function getHumidity ()
    {
       return $this->humidity; 
    }
    
    public function getPressure ()
    {
        return $this->pressure;
    }
}
