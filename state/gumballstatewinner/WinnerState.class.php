<?php
class WinnerState implements State
{
    private $gumballMachine;

    public function __construct ($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;    
    }

    public function insertQuarter ()
    {
        echo "Please wait, we'r already giving you a gumball<br/>";
    }

    public function ejectQuarter ()
    {
        echo "Please wait, we're already giving you a gumball<br/>";
    }

    public function turnCrank ()
    {
        echo "Turning again doesn't get you another gumball<br/>";
    }

    public function dispense ()
    {
        echo "YOU'RE A WINNER! You get two gumballs for your quarter<br/>";
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() == 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->releaseBall();
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo 'Oops, out of gumballs!<br/>';
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }

    public function __toString ()
    {
        return "despensing two gumballs for your quarter, because YOU'RE A WINNER<br/>";
    }
}
