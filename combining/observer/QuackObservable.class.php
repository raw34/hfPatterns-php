<?php 
interface QuackObservable
{
    public function registerObserber($observer);
    public function notifyObservers();
}
?>
