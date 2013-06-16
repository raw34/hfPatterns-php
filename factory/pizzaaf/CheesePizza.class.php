<?php
class CheesePizza extends Pizza {
    private $ingredientFactory;

    public function __construct ($ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare () {
       echo "Preparing {$this->name}<br/>";
       $this->dough = $this->ingredientFactory->createDough();
       $this->sauce = $this->ingredientFactory->createSauce();
       $this->cheese = $this->ingredientFactory->createCheese();
    }
}
