<?php
require_once 'autoload.php';

class BeverageTestDrive {
    public function __construct () {
        try {
            $tea = new Tea();
            $coffee = new Coffee();

            echo 'Making tea...<br/>';
            $tea->prepareRecipe();

            echo 'Making coffee...<br/>';
            $coffee->prepareRecipe();

            $teaHook = new TeaWithHook();
            echo 'Making tea...<br/>';
            $teaHook->prepareRecipe();

            $coffeeHook = new CoffeeWithHook();
            echo 'Making coffee...<br/>';
            $coffeeHook->prepareRecipe();
        } catch (Exception $e) {
            echo $e->getMessage(); 
        }
    }
}

$obj = new BeverageTestDrive();
