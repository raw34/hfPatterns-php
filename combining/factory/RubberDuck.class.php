<?php
class RubberDuck implements Quackable
{
   public function quack() {
       echo 'Squack';
   }

   public function __tostring() {
       return 'Rubber Duck';
   }
}
?>
