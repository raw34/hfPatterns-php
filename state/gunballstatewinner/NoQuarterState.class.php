<?php
class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct ($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;    
    }

    public function insertQuater ()
    {
        echo 'You inserted a quarter'; 
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }
}
