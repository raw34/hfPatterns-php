<?php
class DvdPlayer {
    private $description;
    private $currentTrack;
    private $amplifier;
    private $moive;

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

    public function eject () {
        $this->moive = NULL;
        echo "{$this->description} eject<br/>";
    }

    public function play ($moive) {
        if (is_integer($moive)) {
            if ($this->moive == NULL) {
                echo "{$this->description} can't play track {$moive}, no dvd inserted<br/>";       
            } else {
                $this->currentTrack = $moive;
                echo "{$this->description} playing track {$this->currentTrack} of \"{$this->moive}\"<br/>";
            }
        } else {
            $this->moive = $moive;
            $this->currentTrack = 0; 
            echo "{$this->description} playing \"{$moive}\"<br/>";
        }
    }

    public function stop () {
        $this->currentTrack = 0;
        echo "{$this->description} stopped \"{$this->moive}\"<br/>";
    }

    public function pause () {
        echo "{$this->description} paused \"{$this->moive}\"<br/>";
    }

    public function setTwoChannelAudio () {
        echo "{$this->description} set two channel audio<br/>";
    }

    public function __toString () {
        return $this->description;
    }
}
