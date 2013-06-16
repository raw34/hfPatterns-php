<?php
//require_once 'autoload.php';

class MallardDuck extends Duck
{
    public  function __construct ()
    {
        $this->setFlyBehavior(new FlyWithWings()); 
        $this->setQuackBehavior(new QuackQuack()); 
    }

    public function display ()
    {
       echo "I'm a real Mallard Duck<br/>";
    }
}
