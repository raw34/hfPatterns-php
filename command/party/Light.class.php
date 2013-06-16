<?php
class Light {
   private $location;
   private $level;

   public function __construct ($location) {
       $this->location = $location;
   }

   public function on () {
       $this->level = 100;
       echo 'Light is on<br/>';
   }

   public function off () {
       $this->level = 0;
       echo 'Light is off<br/>';
   }

   public function dim ($level) {
       $this->level = $level;
       if ($level == 0) {
          $this->off(); 
       } else {
           echo "Light is dimmed to {$this->level}%<br/>";
       }
   }

   public function getLevel () {
       return $this->level;
   }
}
