<?php
class RedheadDuck implements Quackable
{
    public function quack() {
        echo 'Quack';
    }

    public function __tostring() {
        return 'Redhead Duck';
    }
}
?>
