<?php
class NYPizzaStore extends PizzaStore {
    public function createPizza ($type) {
        if ($type == 'cheese') {
            return new NYStyleCheesePizza(); 
        } elseif ($type == 'veggie') {
            return new NYStyleVeggiePizza();
        } elseif ($type == 'clam') {
            return new NYStyleClamPizza();
        } elseif ($type == 'pepperoni') {
            return new NYStylePepperoniPizza();
        } else {
            return null;
        }
    }    
}
