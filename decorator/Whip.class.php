<?php
class Whip extends CondimentDecorator {
    private $beverate;

    public function __construct ($beverate) {
        $this->beverate = $beverate;
    }

    public function getDescription () {
        return $this->beverate->getDescription() . ', Whip';
    }

    public function cost () {
        return .10 + $this->beverate->cost();
    }
}
