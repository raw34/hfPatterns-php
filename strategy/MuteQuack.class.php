<?php
//require_once 'autoload.php';

class MuteQuack implements QuackBehavior
{
    public function quack ()
    {
       echo 'MuteQuack<br/>'; 
    }
}
