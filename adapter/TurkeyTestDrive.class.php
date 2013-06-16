<?php
require_once 'autoload.php';

class TurkeyTestDrive {
    public function __construct () {
        $duck = new MallardDuck();
        $duckAdapter = new DuckAdapter($duck);

        for ($i = 0; $i < 10; $i++) {
           echo '<br/>The DuckAdapter says...'; 
           $duckAdapter->gobble();
           $duckAdapter->fly();
        }
    }
}

$obj = new TurkeyTestDrive();
