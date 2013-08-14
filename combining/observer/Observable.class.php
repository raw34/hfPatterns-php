<?php 
class Observable implements QuackObservable
{
    private $observers;
    private $duck;

    public function __construct($duck) {
        $this->observers = new ArrayObject(array());
        $this->duck = $duck;
    }

    public function registerObserber($observer) {
        $this->observers->append($observer);
    }

    public function notifyObservers() {
        $iterator = $this->observers->getIterator();
        while ($iterator->valid()) {
            $observer = $iterator->current();
            $observer->update($this->duck);
            $iterator->next();
        }
    }

    public function getObservers() {
        return $this->observers->getIterator();
    }
}
?>
