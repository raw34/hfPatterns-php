<?php
class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct ($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;    
    }

    public function insertQuarter ()
    {
        echo 'You inserted a quarter<br/>'; 
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter ()
    {
        echo "You haven't inserted a quarter<br/>";
    }

    public function turnCrank ()
    {
        echo "You turned, but there's no quarter<br/>";
    }

    public function dispense ()
    {
        echo 'You need to pay first<br/>';
    }

    public function __toString ()
    {
        return 'waiting for quarter<br/>';
    }
}
