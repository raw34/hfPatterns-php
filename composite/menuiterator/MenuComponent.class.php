<?php
abstract class MenuComponent
{

    public function add ($munuComponent)
    {
         throw new Exception();
    }

    public function remove ($munuComponent)
    {
         throw new Exception();
    }

    public function getClild ($i)
    {
         throw new Exception();
    }

    public function getName ()
    {
         throw new Exception();
    }

    public function getDescription ()
    {
         throw new Exception();
    }

    public function getPrice ()
    {
         throw new Exception();
    }

    public function isVegetarian ()
    {
         throw new Exception();
    }

    public function _print ()
    {
        throw new Exception();
    }

    public abstract function createIterator ();
}
