<?php
require_once 'autoload.php';

class PizzaTestDrive {
    public function __construct () {
        $factory = new SimplePizzaFactory();
        $store = new PizzaStore($factory);

        $pizza = $store->orderPizza('cheese');
        echo "We ordered a {$pizza->getName()}<br/>";
        echo "$pizza<br/>";

        $pizza = $store->orderPizza('clam');
        echo "We ordered a {$pizza->getName()}<br/>";
        echo "$pizza<br/>";

        $pizza = $store->orderPizza('veggie');
        echo "We ordered a {$pizza->getName()}<br/>";
        echo "$pizza<br/>";
    }
}

$obj = new PizzaTestDrive();
