<?php
class Soy extends CondimentDecorator {
    private $beverate;

    public function __construct ($beverate) {
       $this->beverate = $beverate; 
    }

    public function getDescription () {
        return $this->beverate->getDescription() . ', Soy';
    }

    public function cost () {
        return .15 + $this->beverate->cost();
    }
}
