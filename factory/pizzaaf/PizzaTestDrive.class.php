<?php
require_once 'autoload.php';

class PizzaTestDrive {
    public function __construct () {
        try {
            $nyStore = new nyPizzaStore();
            $chicagoStore = new chicagoPizzaStore();

            $pizza = $nyStore->orderPizza('cheese');
            echo "Ethan ordered a {$pizza} <br/>";

            $pizza = $chicagoStore->orderPizza('cheese');
            echo "Joel ordered a {$pizza} <br/>";

            $pizza = $nyStore->orderPizza('veggie');
            echo "Ethan ordered a {$pizza} <br/>";
            //echo $pizza;
        } catch (Exception $e) {
           echo $e->getMessage(); 
        }
   }
}

$obj = new PizzaTestDrive();
