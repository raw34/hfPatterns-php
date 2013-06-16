<?php
abstract class Pizza {
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function prepare () {
        echo "Preparing {$this->name}<br/>";
        echo 'Tossing dough...<br/>';
        echo 'Adding sauce...<br/>';
        echo 'Adding toppings: ';
        foreach ($this->toppings as $k => $v) {
           echo '  ' . $v;
        }
        echo '<br/>';
    }

    public function bake () {
        echo 'Bake for 25 minutes at 350<br/>';
    }

    public function cut () {
        echo 'Cutting the pizza into diagonal slices<br/>'; 
    }

    public function box () {
        echo 'Place pizza in official PizzaStore box<br/>';
    }

    public function getName () {
        return $this->name;
    }

    public function __toString () {
        $diplay = '---' . $this->name . '---<br/>'
                . $this->dough .'<br/>'
                . $this->sauce .'<br/>';
        foreach ($this->toppings as $k => $v) {
           $diplay .= $v .'<br/>';
        }
        return $diplay;
    }
}
