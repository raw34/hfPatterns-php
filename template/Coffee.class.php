<?php
class Coffee extends CaffeineBeverage {
    public function brew () {
        echo 'Dripping Coffee through filter<br/>';
    }

    public function addCondiments () {
        echo 'Adding Sugar and Milk<br/>';
    }
}
