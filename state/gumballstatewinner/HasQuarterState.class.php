<?php
class HasQuarterState implements State
{
    private $randomWinner;
    private $gumballMachine;

    public function __construct ($gumballMachine)
    {
        $this->randomWinner = rand(0, time());
        $this->gumballMachine = $gumballMachine;    
    }

    public function insertQuarter ()
    {
        echo "You can't insert another quarter<br/>"; 
    }

    public function ejectQuarter ()
    {
        echo 'Quarter returned<br/>';
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank ()
    {
        echo 'You turned...<br/>';
        $winner = rand(0, 10);
        if ($winner == 0 && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense ()
    {
        echo 'No gumball dispensed<br/>';
    }

    public function __toString ()
    {
        return 'waiting for turn of crank<br/>';
    }
}
