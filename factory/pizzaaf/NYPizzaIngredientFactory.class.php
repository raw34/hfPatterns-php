<?php
class NYPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough () {
        return new ThinCrustDough();
    }

    public function createSauce () {
        return new MarinaraSause();
    }

    public function createCheese () {
        return new ReggianoCheese();
    }

    public function createClam () {
        return new FreshClams();
    }

    public function createPepperoni () {
        return new SlicePepperoni();
    }

    public function createVeggies () {
        return array(
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        );
    }
}
