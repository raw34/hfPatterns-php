<?php
class Milk extends CondimentDecorator {
    private $beverate;

    public function __construct ($beverate) {
        $this->beverate = $beverate;
    }

    public function getDescription () {
        return $this->beverate->getDescription() . ', Milk'
    }

    public function cost () {
        return 0.10 + $this->beverate->cost();
    }
}
