<?php
class Amplifier {
    private $description;
    private $tuner;
    private $dvd;
    private $cd;

    public function __construct ($description) {
        $this->description = $description;
    }

    public function on () {
        echo "{$this->description} on<br/>";
    }

    public function off () {
        echo "{$this->description} off<br/>";
    }

    public function setStereoSound () {
        echo "{$this->description} stereo mode on<br/>";
    }

    public function setSurroundSound () {
        echo "{$this->description} surround mode on (5 speakers, 1 subwoofer)<br/>";
    }

    public function setVolume ($level) {
       echo "{$this->description} setting volume to {$level}<br/>"; 
    }

    public function setTuner ($tuner) {
        echo "{$this->description} setting tuner to {$this->dvd}<br/>";
        $this->tuner = $tuner;
    }

    public function setDvd ($dvd) {
        echo "{$this->description} setting DVD player to {$dvd}<br/>";
        $this->dvd = $dvd;
    }

    public function setCd ($cd) {
       echo "{$this->description} setting CD player to {$cd}<br/>"; 
       $this->cd = $cd;
    }

    public function __toString () {
        return $this->description;
    }
}
