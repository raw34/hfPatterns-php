<?php 
class Flock implements Quackable
{
    private $quackers;

    public function __construct() {
        $this->quackers = new ArrayObject(array());
    }

    public function add($quacker) {
        $this->quackers->append($quacker);
    }

    public function quack() {
        $iterator = $this->quackers->getIterator();
        while ($iterator->valid()) {
            $quacker = $iterator->current();
            echo '<br/>';
            $quacker->quack();
            $iterator->next();
        }
    }

    public function registerObserber($observer) {
        $iterator = $this->quackers->getIterator();
        while ($iterator->valid()) {
            $quacker = $iterator->current();
            $quacker->registerObserber($observer);
            $iterator->next();
        }
    }

    public function notifyObservers() {
        // body...
    }

    public function __tostring() {
        return 'Flock of Quackers';
    }
}
?>
