<?php
require_once 'autoload.php';
/**
 * demo
 */
class DuckSimulator
{
    /**
     * 
     */
    public function __construct()
    {
        $this->simulate();
    }

    public function simulate() {
        $mallardDuck = new MallardDuck();
        $redheadDuck = new RedheadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();

        echo "\nDuck Simulator<br/>";
        $this->_simulate($mallardDuck);
        $this->_simulate($redheadDuck);
        $this->_simulate($duckCall);
        $this->_simulate($rubberDuck);
    }

    public function _simulate($duck) {
        $duck->quack();
        echo '<br/>';
    }
}

$obj = new DuckSimulator();
