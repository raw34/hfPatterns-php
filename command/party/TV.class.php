<?php
class TV {
    private $location;
    private $channel;

    public function __construct ($location) {
        $this->location = $location;
    }

    public function on () {
        echo "{$this->location} TV is on<br/>";
    }

    public function off () {
        echo "{$this->location} TV is off<br/>";
    }

    public function setInputChannel () {
        $this->channel = 3;
        echo "{$this->location} TV channel is set for DVD<br/>";
    }
}
