<?php
class SoldOutState implements State
{
    private $gumballMachine;

    public function __construct ($gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;    
    }

    public function insertQuarter ()
    {
        echo "You can't insert a quarter, the machine is sold out<br/>";
    }

    public function ejectQuarter ()
    {
        echo "You can't eject, you haven't inserted a quarter yet<br/>";
    }

    public function turnCrank ()
    {
        echo "You turned, but there are no gumballs<br/>";
    }

    public function dispense ()
    {
        echo 'No gumball dispensed<br/>';
    }

    public function __toString ()
    {
        return 'sold out<br/>';
    }
}
