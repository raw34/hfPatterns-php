<?php
class MallardDuck implements Quackable
{
    public function quack() {
        echo 'Quack';
    }

    public function __tostring() {
        return 'Mallard Duck';
    }
}
?>
