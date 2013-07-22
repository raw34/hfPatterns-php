<?php
class Waitress
{
    private $allMenus;

    public function __construct ($allMenus)
    {
        $this->allMenus = $allMenus; 
    }

    public function printMenu ()
    {
        $this->allMenus->_print();
    }
}
