<?php
class SoldState implements State
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
        echo 'Sorry, you already turned the crank<br/>';
    }

    public function turnCrank ()
    {
        echo "Turning twice doesn't get you another gumball<br/>";
    }

    public function dispense ()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo 'Oops, out of gumballs!<br/>';
        }
    }

    public function __toString ()
    {
        return 'dispensing a gumball<br/>';
    }
}
