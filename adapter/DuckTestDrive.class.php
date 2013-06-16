<?php
require_once 'autoload.php';

class DuckTestDrive {
    public function __construct () {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();
        $turkeyAdapter = new TurkeyAdapter($turkey);

        echo '<br/>The Turkey says...';
        $turkey->gobble();
        $turkey->fly();

        echo '<br/>The Duck says...';
        $this->testDuck($duck);

        echo '<br/>The TurkeyAdapter says...';
        $this->testDuck($turkeyAdapter);
    }

    public function testDuck ($duck) {
        $duck->quack();
        $duck->fly();
    }
}

$obj = new DuckTestDrive();
