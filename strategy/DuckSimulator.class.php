<?php
require_once 'autoload.php';

class DuckSimulator
{
    private $decoyDuck;
    private $mallardDuck;
    private $modelDuck;

    public  function __construct ()
    {
        $this->decoyDuck = new DecoyDuck();    
        $this->mallardDuck = new MallardDuck();
        $this->modelDuck = new ModelDuck();
        $this->test();
    }

    public function test ()
    {
        $this->decoyDuck->display();
        $this->decoyDuck->performFly();
        $this->decoyDuck->performQuack(); 

        $this->mallardDuck->display();
        $this->mallardDuck->performFly();
        $this->mallardDuck->performQuack(); 
        
        $this->modelDuck->display();
        $this->modelDuck->performFly();
        $this->modelDuck->performQuack(); 
        $this->modelDuck->setFlyBehavior(new FlyRoketPowered());
        $this->modelDuck->performFly();
    }
}

$obj = new DuckSimulator();
