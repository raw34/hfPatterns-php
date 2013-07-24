<?php
class GumballMachine
{
    private soldOutState;
    private noQuarterState;
    private hasQuarterState;
    private soldState;
    private winnerState;

    private state;
    private count = 0;    

    public function __construct ($numberGumballs)
    {
        $this->soldOutState = new SoldOutState();
        $this->noQuarterState = new NoQuarterState();
        $this->hasQuarterState = new HasQuarterState();
        $this->soldState = new SoldState();
        $this->winnerState = new WinnerState();
        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state =  $this->noQuarterState;  
        }
    }

    public function insertQuarterState ()
    {
        $this->state->insertQuarter();
    }
    
    public function ejectQuaterState ()
    {
        $this->state->ejectQuater();
    }

    public function turnCrank ()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    private function setState ($state)
    {
        $this->state = $state;
    }

    private function releaseBall ()
    {
        echo 'A gumball comes rolling out the slot...';
        if ($this->count != 0) {
            $this->count--;
        }
    }

}
