<?php
require_once 'autoload.php';

class ChocolateController {
    public function __construct () {
        $boiler = ChocolateBoiler::getInstance();
        $boiler->fill();
        $boiler->boil();
        $boiler->drain();
        $boiler2 = ChocolateBoiler::getInstance();
    }
}

$obj = new ChocolateController();
