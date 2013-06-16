<?php
class ClamPizza extends Pizza {
    public function __construct () {
        $this->name = 'Clam pizza';
        $this->dough = 'Thin crust';
        $this->sauce = 'White garlic sauce';
        array_push($this->toppings, 'Clams');
        array_push($this->toppings, 'Grated parmesan cheese');
    }
}
