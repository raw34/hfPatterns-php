<?php
class GooseAdapter implements Quackable
{
    private $goose;

    public function __construct($goose) {
        $this->goose = $goose;
    }

    public function quack() {
        $this->goose->honk();
    }

    public function __tostring() {
        return 'Goose pretending to be a Duck';
    }
}

?>
