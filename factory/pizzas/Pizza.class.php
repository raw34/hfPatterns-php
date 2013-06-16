<?php
abstract class Pizza {
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = array();

    public function getName () {
        return $this->name;
    }

    public function prepare () {
        echo "Preparing {$this->name}<br/>";
    }

    public function bake () {
        echo "Baking {$this->name}<br/>";
    }

    public function cut () {
        echo "Cutting {$this->name}<br/>";
    }

    public function box () {
        echo "Boxing {$this->name}<br/>";
    }
    
    public function __toString () {
        $display = '--- ' . $this->name . ' ---<br/>'
                 . $this->dough . '<br/>'
                 . $this->sauce . '<br/>';
        foreach ($this->toppings as $k => $v) {
           $display .= $v . '<br/>'; 
        }
        return $display;
    }
}
