<?php 
class DuckCall implements Quackable {
    public function quack() {
        echo 'Kwak';
    }

    public function __tostring() {
        return 'Duck Call';
    }
}
?>
