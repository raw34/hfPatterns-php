<?php 
class DecoyDuck implements Quackable
{
    public function quack() {
        echo '<< Silence>>';
    }

    public function __tostring() {
        return 'Decoy Duck';
    }
}
