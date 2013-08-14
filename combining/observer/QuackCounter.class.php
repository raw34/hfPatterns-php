<?php 
/**
 * count
 */
class QuackCounter implements Quackable
{
    private $duck;
    static public $numberOfQuacks; 
    /**
     * 
     */
    public function __construct($duck)
    {
        $this->duck = $duck;
    }

    public function quack() {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    static public function getQuacks() {
        return self::$numberOfQuacks;
    }

    public function registerObserber($observer) {
        $this->duck->registerObserber($observer);
    }

    public function notifyObservers() {
        $this->duck->notifyObservers();
    }

    public function __tostring() {
        return $this->duck->__tostring();
    }
}
?>
