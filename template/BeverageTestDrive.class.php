<?php
require_once 'autoload.php';

class BeverageTestDrive {
    public function __construct () {
        $tea = new Tea();
        $coffee = new Coffee();

        echo 'Making tea...<br/>';
        $tea->prepareRecipe();

        echo 'Making coffee...<br/>';
        $coffee->prepareRecipe();

        $teaHook = new TeaWithHook();

        echo 'Making tea...<br/>';
        $tea->prepareRecipe();
    }
}

$obj = new BeverageTestDrive();
