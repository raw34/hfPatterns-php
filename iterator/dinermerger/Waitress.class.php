<?php
class Waitress
{
    $pancakeHouseMenu;
    $dinerMenu;

    public function __construct ($pancakeHouseMenu, $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu ()
    {
        $dinerIterator = $this->dinerMenu->createIterator();
        echo "MENU\n----\nLUNCH";
        $this->_printMenu($dinerIterator);
    }

    private function _printMenu ($iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo $menuItem->getName() .', ';
            echo $menuItem->getPrice() .' -- ';
            echo $menuItem->getDescription();
        }
    }

    public function printVegetarianMenu ()
    {
        $this->_printVegetarianMenu($this->dinerMenu->createIterator());
    }

    private function _printVegetarianMenu ($iterator)
    {
         while ($iterator->hasNext()) {
            $menuItem = $iterator->next(); 
            if ($menuItem->isVegetarian()) {
                echo $menuItem->getName() . "\t\t";
                echo $menuItem->getPrice() . "\t";
                echo $menuItem->getDescription();
            }
         }
    }

    public function isItemVegetarian ($name)
    {
        $dinerIterator = $this->dinerMenu->createIterator();
        if ($this->isVegetarian($name, $dinerIterator)) {
            return true;
        }
        return false;
    }

    private function isVegetarian ($name, $iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            if ($menuItem->getName() == $name) {
                if ($menuItem->isVegetarian()) {
                    return true;
                }
            }
            return false;
        }
    }
}
