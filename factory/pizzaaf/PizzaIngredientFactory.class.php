<?php
interface PizzaIngredientFactory {
    public function createDough ();
    public function createSauce ();
    public function createCheese ();
    public function createClam ();
    public function createPepperoni ();
    public function createVeggies ();
}
