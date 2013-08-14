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
            $quacker->quack();
            $iterator->next();
        }
    }

    public function __tostring() {
        return 'Flock of Quackers';
    }
}
?>
