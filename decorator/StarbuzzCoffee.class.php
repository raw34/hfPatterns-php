<?php
require_once 'autoload.php';

class StarbuzzCoffee {
    public function __construct () {
        $beverate1 = new DarkRoast();
        $beverate1 = new Mocha($beverate1);
        $beverate1 = new Mocha($beverate1);
        $beverate1 = new Whip($beverate1);
        echo $beverate1->getDescription() . " $" . $beverate1->cost();

        echo '<br/>';
        $beverate2 = new Espresso();
        echo $beverate2->getDescription() . ' $' . $beverate2->cost();    

        echo '<br/>';
        $beverate3 = new HouseBlend();
        $beverate3 = new Soy($beverate3);
        $beverate3 = new Mocha($beverate3);
        $beverate3 = new Whip($beverate3);
        echo $beverate3->getDescription() . ' $' . $beverate3->cost();
    }
}

$obj = new StarbuzzCoffee();
