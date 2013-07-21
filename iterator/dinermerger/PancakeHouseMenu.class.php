<?php
class PancakeHouseMenu implements Menu
{
    private $menuItems;

    public function __construct ()
    {
        $this->menuItems = array();

    }

    public function addItems ($name, $description, $vegetarian, $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->add($menuItem);
    }

    public function getMenuItems ()
    {
        return $this->menuItems;
    }

    public function createIterator ()
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }

    public function __toString ()
    {
        return 'Objectville Pancake House Menu';
    }
}
