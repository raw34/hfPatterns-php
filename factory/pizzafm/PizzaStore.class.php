<?php
abstract class PizzaStore {
    public abstract function createPizza ($type);

    public function orderPizza ($type) {
        $pizza = $this->createPizza($type);
        echo "--- Making a {$pizza->getName()} ---<br/>";
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
