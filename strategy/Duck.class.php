<?php
//require_once 'autoload.php';

abstract class Duck
{
    private $flyBehavior;
    private $quackBehavior;

    function __construct ()
    {
        //子类中重写构造方法调用setFLyBehavior/setQuackBehavior
    }    

    public function setFlyBehavior ($fb)
    {
        $this->flyBehavior = $fb; 
    }

    public function setQuackBehavior ($qb)
    {
        $this->quackBehavior = $qb;     
    }

    public function performFly ()
    {
        $this->flyBehavior->fly(); 
    }

    public function performQuack ()
    {
        $this->quackBehavior->quack(); 
    }

    public function swim ()
    {
        echo 'All ducks float<br/>';
    }

    public abstract function display ();
}
