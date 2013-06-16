<?php
class DuckAdapter implements Turkey {
    private $duck;
    private $rand;

    public function __construct ($duck) {
        $this->duck = $duck; 
        //$this->rand = rand(0, 5);
    }

    public function gobble () {
        $this->duck->quack();
    }

    public function fly () {
        $this->rand = rand(0, 5);
        if ($this->rand == 0) {
           $this->duck->fly(); 
        }
    }
}
