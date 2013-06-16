<?php
class Tea extends CaffeineBeverage {
    public function brew () {
        echo 'Steeping the tea<br/>';
    }

    public function addCondiments () {
        echo 'Adding lemon<br/>';
    }
}
