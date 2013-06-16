<?php
class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory {
    public function createDough () {
        return new ThickCrustDough();
    }

    public function createSauce () {
        return new PlumTomatoSause();
    }

    public function createCheese () {
        return new MozzarellaCheese();
    }

    public function createClam () {
        return new FrozenClams();
    }

    public function createPepperoni () {
        return new SlicePepperoni();
    }

    public function createVeggies () {
        return array(
            new BlackOlives(),
            new Spinach(),
            new Eggplant()
        );
    }
}
