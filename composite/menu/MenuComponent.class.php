<?php
abstract class MenuComponent
{
    public function add ($menuComponet)
    {
        throw new Exception();
    }

    public function remove ($menuComponet)
    {
        throw new Exception();
    }

    public function getChild ($i)
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
}
