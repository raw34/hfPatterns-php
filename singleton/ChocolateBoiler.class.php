<?php
class ChocolateBoiler {
    private $empty;
    private $boiled;
    private static $uniqueInstance;

    private function __construct () {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance () {
        if (self::$uniqueInstance == NULL) {
            echo 'Creating unique instance of Chocolate Boiler<br/>';
            self::$uniqueInstance = new ChocolateBoiler(); 
        }
        echo 'Returing instance of Chocolate Boiler<br/>';
        return self::$uniqueInstance;
    }

    public function isEmpty () {
        return $this->empty;
    }

    public function isBoiled () {
        return $this->boiled;
    }

    public function fill () {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false; 
            echo 'fill the boiler with a milk/chocolate mixtrue<br/>';
        }
    }

    public function drain () {
        if (!$this->isEmpty() && $this->isBoiled()) {
            echo 'drain the boiled milk and chocolate<br/>';
            $this->empty = true; 
        }
    }

    public function boil () {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            echo 'bring the contents to a boil<br/>';
            $this->boiled = true; 
        }
    }
}
