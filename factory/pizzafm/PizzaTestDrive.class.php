<?php
require_once 'autoload.php';

class PizzaTestDrive {
    public function __construct () {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "Ethan ordered a {$pizza->getName()}<br/>";

        $pizza = $chicagoStore->orderPizza('cheese');
        echo "Ethan ordered a {$pizza->getName()}<br/>";
    }
}

$obj = new PizzaTestDrive();
