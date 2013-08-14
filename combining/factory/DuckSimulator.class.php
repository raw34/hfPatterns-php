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
        $duckFactory = new CountingDuckFactory();
        $this->simulate($duckFactory);
    }

    public function simulate($duckFactory) {
        $mallardDuck = $duckFactory->createMallardDuck();
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Abstract Factory<br/>";
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
