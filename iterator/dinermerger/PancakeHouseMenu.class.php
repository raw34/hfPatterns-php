<?php
class PancakeHouseMenu implements Menu
{
    private $menuItems;

    public function __construct ()
    {
        $this->menuItems = array();
        $this->addItem("K&B's Pancake Breakfast", 'Pancakes with scrambled eggs, and toast', true, 2.99);
        $this->addItem('Regular Pancake Breakfast', 'Pancakes with fried eggs, sausage', false, 2.99);
        $this->addItem('Blueberry Pancakes', 'Pancakes make with fresh blueberries', true, 3.49);
        $this->addItem('Waffles', 'Waffles, with your choice of blueberries or erries', true, 3.59);
    }

    public function addItem ($name, $description, $vegetarian, $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        //$this->menuItems->add($menuItem);
        $this->menuItems[] = $menuItem;
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
