<?php
class ModelDuck extends Duck
{
    public function __construct ()
    {
       $this->setFlyBehavior(new FlyNoWay());
       $this->setQuackBehavior(new QuackQuack());
    }

    public function display ()
    {
        echo "I'm a Model Duck<br/>";     
    }
}
