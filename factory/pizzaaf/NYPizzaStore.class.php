<?php
class NYPizzaStore extends PizzaStore {
    public function createPizza ($type) {
        $pizza = NULL;
        $ingredientFactory = new NYPizzaIngredientFactory();
        if ($type == 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type == 'veggie') {
            $pizza = new VeggiesPizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        } elseif ($type == 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } elseif ($type == 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        }

        return $pizza;
    }
}
