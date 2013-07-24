<?php
class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    private $winnerState;

    private $state;
    private $count = 0;    

    public function __construct ($numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state =  $this->noQuarterState;  
        }
    }

    public function insertQuarter ()
    {
        $this->state->insertQuarter();
    }
    
    public function ejectQuater ()
    {
        $this->state->ejectQuater();
    }

    public function turnCrank ()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState ($state)
    {
        $this->state = $state;
    }

    public function releaseBall ()
    {
        echo 'A gumball comes rolling out the slot...<br/>';
        if ($this->count != 0) {
            $this->count--;
        }
    }

    public function getCount ()
    {
        return $this->count;
    }

    public function refill ($count)
    {
        $this->count = $count;
        $this->state = noQuarterState;
    }

    public function getState ()
    {
        return $this->state;
    }

    public function getSoldOutSatte ()
    {
        return $this->soldOutState;
    }

    public function getNoQuarterState ()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState ()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState ()
    {
        return $this->soldState;
    }

    public function getWinnerState ()
    {
        return $this->winnerState;
    }

    public function __toString ()
    {
        $result = '<br/>Mighty Gumball, Inc.';
        $result .= '<br/>PHP-enabled Standing Gumball Model #2013';
        $result .= "<br/>Inventory: {$this->count} gumball";
        if ($this->count != 1) {
            $result .= 's'; 
        }
        $result .= "<br/>Machine is {$this->state}<br/>";
        return $result;

    }
}
