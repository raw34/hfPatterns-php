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
        $mallardDuck = new QuackCounter(new MallardDuck());
        $redheadDuck = new QuackCounter(new RedheadDuck());
        $duckCall = new QuackCounter(new DuckCall());
        $rubberDuck = new QuackCounter(new RubberDuck());
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Decorator<br/>";
        $this->_simulate($mallardDuck);
        $this->_simulate($redheadDuck);
        $this->_simulate($duckCall);
        $this->_simulate($rubberDuck);
        $this->_simulate($gooseDuck);

        echo 'The ducks quacked ' . QuackCounter::getQuacks() . ' times';
    }

    public function _simulate($duck) {
        $duck->quack();
        echo '<br/>';
    }
}

$obj = new DuckSimulator();
