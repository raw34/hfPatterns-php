<?php
class CheesePizza extends Pizza {
    public function __construct () {
        $this->name = 'Cheese pizza';
        $this->dough = 'Regular crust';
        $this->sauce = 'Marinara pizza sauce';
        array_push($this->toppings, 'Fresh marinara');
        array_push($this->toppings, 'Parmesan');
    }
}
