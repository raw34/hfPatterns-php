<?php
class Mocha extends CondimentDecorator {
    private $beverate;

    public function __construct ($beverate) {
        $this->beverate = $beverate;
    }

    public function getDescription () {
        return $this->beverate->getDescription() . ', Mocha';
    }

    public function cost () {
        return .20 + $this->beverate->cost();
    }
}
