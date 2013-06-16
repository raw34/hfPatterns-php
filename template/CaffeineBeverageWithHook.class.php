<?php
abstract class CaffeineBeverageWithHook {
    final function prepareRecipe () {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->custmoerWantsCondiments) {
            $this->addCondiments();
        }
    }

    abstract function brew ();  

    abstract function addCondiments ();

    public function boilWater () {
        echo 'Boiling Water<br/>';
    }

    public function pourInCup () {
        echo 'Pouring into cup<br/>';
    }

    public function custmoerWantsCondiments () {
        return true;
    }
}
