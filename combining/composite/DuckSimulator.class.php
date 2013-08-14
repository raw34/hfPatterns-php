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
        //$mallardDuck = $duckFactory->createMallardDuck();
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        echo "\nDuck Simulator: With Composite<br/>";

        $flockOfDucks = new Flock();
        
        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $flockOfMallards = new Flock();

        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $mallardThree = $duckFactory->createMallardDuck();
        $mallardFour = $duckFactory->createMallardDuck();

        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);
        $flockOfMallards->add($mallardThree);
        $flockOfMallards->add($mallardFour);

        $flockOfDucks->add($flockOfMallards);

        echo "\nDuck Simulator: Whole Flock Simulation<br/>";
        $this->_simulate($flockOfDucks);

        echo "\nDuck Simulator: Mallard flock Simulation<br/>";

        echo 'The ducks quacked ' . QuackCounter::getQuacks() . ' times';
    }

    public function _simulate($duck) {
        $duck->quack();
        echo '<br/>';
    }
}

$obj = new DuckSimulator();
