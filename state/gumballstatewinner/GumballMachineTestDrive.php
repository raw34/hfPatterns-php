<?php
require_once 'autoload.php';

class GumballMachineTestDrive
{
    public function __construct ()
    {
        $gumballMachine = new GumballMachine(10);

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo $gumballMachine;
    }
}

$obj = new GumballMachineTestDrive();
