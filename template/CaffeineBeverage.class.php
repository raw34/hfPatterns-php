<?php
abstract class CaffeineBeverage {
    final function prepareRecipe () {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract function brew ();  

    abstract function addCondiments ();

    public function boilWater () {
        echo 'Boiling Water<br/>';
    }

    public function pourInCup () {
        echo 'Pouring into cup<br/>';
    }
}
