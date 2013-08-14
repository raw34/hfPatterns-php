<?php 
class Quackologist implements Observer
{
    public function update($duck) {
        echo 'Quackologist: ' . $duck + 'just quacked.';
    }

    public function __tostring() {
        return 'Quackologist';
    }
}
?>
