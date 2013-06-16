<?php
class CdPlayer {
    private $description;
    private $currentTrack;
    private $amplifier;
    private $title;

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
        $this->title = NULL;
        echo "{$this->description} eject<br/>";
    }

    public function play ($title) {
        if (is_integer($title)) {
            if ($this->title == NULL) {
                echo "{$this->description} can't play track {$title}, no cd inserted<br/>";       
            } else {
                $this->currentTrack = $title;
                echo "{$this->description} playing track {$this->currentTrack}<br/>";
            }
        } else {
            $this->title = $title;
            $this->currentTrack = 0; 
            echo "{$this->description} playing \"{$title}\"<br/>";
        }
    }

    public function stop () {
        $this->currentTrack = 0;
        echo "{$this->description} stopped<br/>";
    }

    public function pause () {
        echo "{$this->description} paused \"{$this->title}\"<br/>";
    }

    public function __toString () {
        return $this->description;
    }
}
