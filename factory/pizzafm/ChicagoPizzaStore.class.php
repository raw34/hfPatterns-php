<?php
class ChicagoPizzaStore extends PizzaStore {
    public function createPizza ($type) {
        if ($type == 'cheese') {
            return new ChicagoStyleCheesePizza(); 
        } elseif ($type == 'veggie') {
            return new ChicagoStyleVeggiePizza();
        } elseif ($type == 'clam') {
            return new ChicagoStyleClamPizza();
        } elseif ($type == 'pepperoni') {
            return new ChicagoStylePepperoniPizza();
        } else {
            return null;
        }
    }    
}
