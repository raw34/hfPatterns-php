<?php
class MallardDuck implements Quackable
{
    private $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo 'Quack';
        $this->notifyObservers();
    }

    public function registerObserber($observer) {
        $this->observable->registerObserber($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __tostring() {
        return 'Mallard Duck';
    }
}
?>
