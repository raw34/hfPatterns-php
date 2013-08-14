<?php
class GooseAdapter implements Quackable
{
    private $goose;
    private $observable;

    public function __construct($goose) {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack() {
        $this->goose->honk();
        $this->notifyObservers();
    }

    public function registerObserber($observer) {
        $this->observable->registerObserber($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function __tostring() {
        return 'Goose pretending to be a Duck';
    }
}

?>
