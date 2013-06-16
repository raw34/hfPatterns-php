<?php
class TVOnCommand implements Command {
    private $tv;

    public function __construct ($tv) {
        $this->tv = $tv;
    }

    public function execute () {
        $this->tv->on();
    }

    public function undo () {
        $this->tv->off();
    }
}
