<?php 
class DecoyDuck implements Quackable
{
    private $observable;

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function quack() {
        echo '<< Silence>>';
        $this->notifyObservers();
    }

    public function registerObserber($observer) {
        $this->observable->registerObserber($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __tostring() {
        return 'Decoy Duck';
    }
}
