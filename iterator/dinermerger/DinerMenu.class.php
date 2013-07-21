<?php
class DinerMenu implements Menu
{
    static final $MAX_ITEMS = 6;
    private $numberOfItems = 0;
    private $menuItems;

    public function __construct ()
    {
        $this->menuItems = new MenuItem[$this->Max_ITEMS];
        $this->addItem(array('Vegetarian BLT', "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99));
        $this->addItem(array('BLT', 'Bacon with lettuce & tomato on whole wheat', false, 2.99));
        $this->addItem(array('Soup of the day', 'Soup of the day, with a side of potato salad', false, 3.29));
        $this->addItem(array('Hotdog', 'A hot dog, with saurkraut, relish, opped with chees', false, 3.05));
        $this->addItem(array());
        $this->addItem(array());
    }

    public function addItem ($name, $description, $vegetarian, $price)
    {
        $menuItems = new MenuItem($name, $description, $vegetarian, $price  );
        if ($this->numberOfItems >= $this->Max_ITEMS) {
            echo "sorry, menu is full! can't add item to menu"; 
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItems;
            $this->numberOfItems++;
        }
    }

    public function getMenuItems ()
    {
        return $this->menuItems;
    }

    public function createIterator ()
    {
        return new DinerMenuIterator($this->menuItems);
    }
}
