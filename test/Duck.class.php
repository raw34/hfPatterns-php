<?php
public abstract class Duck(){
    private $flyBehavior;

    public function __construct(){

    }

    public abstract function display();

    public function performFly(){
        $this->flyBehavior->fly();
    }

    public function performQuack(){
        $this->quackBehavior->quack();
    }

    public function swim(){
        print 'all ducks float';   
    }
}

