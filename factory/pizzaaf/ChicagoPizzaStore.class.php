<?php
class ChicagoPizzaStore extends PizzaStore {
    public function createPizza ($type) {
        $pizza = NULL;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        if ($type == 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type == 'veggie') {
            $pizza = new VeggiesPizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        } elseif ($type == 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($type == 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        }

        return $pizza;
    }
}
