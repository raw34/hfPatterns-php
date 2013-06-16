<?php
class VeggiePizza extends Pizza {
    public function __construct () {
        echo 'VeggiePizza';
        $this->name = 'Veggie pizza';
        $this->dough = 'Crust';
        $this->sauce = 'Marinara sauce';
        array_push($this->toppings, 'Shredded mozzarella');
        array_push($this->toppings, 'Grated parmesan');
        array_push($this->toppings, 'Diced onion');
        array_push($this->toppings, 'Sliced Mushrooms');
        array_push($this->toppings, 'Sliced red pepper');
        array_push($this->toppings, 'Sliced black olives');
    } 
}
