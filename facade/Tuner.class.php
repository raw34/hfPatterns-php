<?php
class Tuner {
    private $description;
    private $amplifier;
    private $frequency;

    public function __construct ($description, $amplifier) {
        $this->description = $description;
        $this->amplifier = $amplifier; 
    }

    public function on () {
        echo "{$this->description} on<br/>";
    }

    public function off () {
        echo "{$this->description} off<br/>";
    }

    public function setFrequency ($frequency) {
       echo "{$this->description} setting frequency to {$frequency}<br/>";
       $this->frequency = $frequency;
    }

    public function setAm () {
        echo "{$this->description} setting AM mode<br/>";
    }

    public function setFm () {
        echo "{$this->description} setting FM mode<br/>";
    }

    public function __toString () {
        return $this->description;
    }
}
