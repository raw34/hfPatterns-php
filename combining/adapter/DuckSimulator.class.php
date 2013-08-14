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
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Goose Adapter<br/>";
        $this->_simulate($mallardDuck);
        $this->_simulate($redheadDuck);
        $this->_simulate($duckCall);
        $this->_simulate($rubberDuck);
        $this->_simulate($gooseDuck);
    }

    public function _simulate($duck) {
        $duck->quack();
        echo '<br/>';
    }
}

$obj = new DuckSimulator();
