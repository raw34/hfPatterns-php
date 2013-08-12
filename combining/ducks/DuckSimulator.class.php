<?php
/**
 * demo
 */
class DuckSimulator
{
    
    /**
     * 
     */
    public function __construct(argument)
    {
        $this->simulate();
    }

    public function simulate() {
        $mallardDuck = new MallardDuck();
        $redheadDuck = new ReadheadDuck();
        $duckCall = new DuckCall();
        $rubberDuck = new RubberDuck();

        echo '\nDuck Simulator';
        $this->_simulate($mallardDuck);
        $this->_simulate($redheadDuck);
        $this->_simulate($duckCall);
        $this->_simulate($rubberDuck);
    }

    public function _simulate($duck) {
        $duck->quack();
    }
}
