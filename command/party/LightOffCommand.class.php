<?php
class LightOffCommand implements Command {
    private $light;

    public function __construct ($light) {
        $this->light = $light;
    }

    public function execute () {
        $this->light->off();
    }

    public function undo () {
        $this->light->on();
    }
}
