<?php
class TVOffCommand implements Command {
    private $tv;

    public function __construct ($tv) {
        $this->tv = $tv;
    }

    public function execute () {
        $this->tv->off();
    }

    public function undo () {
        $this->tv->on();
    }
}
