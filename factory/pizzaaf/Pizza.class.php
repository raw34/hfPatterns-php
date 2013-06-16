<?php
abstract class Pizza {
    protected $name;
    protected $dough;
    protected $sauce;
    protected $cheese;
    protected $clam;
    protected $prepperoni;
    protected $veggies = array();

    public abstract function prepare ();

    public function bake () {
        echo 'Bake for 25 minutes at 350<br/>';
    }

    public function cut () {
        echo 'Cutting the pizza info diagonal slices<br/>';
    }

    public function box () {
        echo 'Place pizza in official PizzaStore box<br/>';
    }

    public function setName ($name) {
       $this->name = $name;
    }

    public function getName () {
       return $this->name; 
    }

    public function __toString () {
        $result = "--- {$this->name} ---<br/>";
        if ($this->dough != NULL) {
            $result .= $this->dough . '<br/>';
        }
        if ($this->sauce != NULL) {
            $result .= $this->sauce . '<br/>'; 
        }
        if ($this->cheese != NULL) {
            $result .= $this->cheese . '<br/>'; 
        }
        if ($this->clam != NULL) {
            $result .= $this->clam . '<br/>'; 
        }
        if ($this->prepperoni != NULL) {
            $result .= $this->peppreoni . '<br/>'; 
        }
        if ($this->veggies != NULL) {
            foreach ($this->veggies as $k => $v) {
                $result .= $v . ', ';   
            }
            $result = substr($result, 0, -2) . '<br/>';
        }
        return $result;
    }
}
