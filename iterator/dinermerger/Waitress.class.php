<?php
class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;
    private $cafeMenu;

    public function __construct ($pancakeHouseMenu, $dinerMenu, $cafeMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
        $this->cafeMenu = $cafeMenu;
    }

    public function printMenu ()
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        echo "<br/>MENU----BREACKFAST<br/>";
        $this->_printMenu($pancakeIterator);

        $dinerIterator = $this->dinerMenu->createIterator();
        echo "<br/>MENU----LUNCH<br/>";
        $this->_printMenu($dinerIterator);

        $cafeIterator = $this->cafeMenu->createIterator();
        echo "<br/>MENU----DINNER<br/>";
        $this->_printMenu($cafeIterator);
    }

    private function _printMenu ($iterator)
    {
        $i = 0;
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            echo $menuItem->getName() .', ';
            echo $menuItem->getPrice() .' -- ';
            echo $menuItem->getDescription() . '<br/>';
        }
    }

    public function printVegetarianMenu ()
    {
        $this->_printVegetarianMenu($this->dinerMenu->createIterator());
        $this->_printVegetarianMenu($this->pancakeHouseMenu->createIterator());
        $this->_printVegetarianMenu($this->cafeMenu->createIterator());
    }

    private function _printVegetarianMenu ($iterator)
    {
         while ($iterator->hasNext()) {
            $menuItem = $iterator->next(); 
            if ($menuItem->isVegetarian()) {
                echo $menuItem->getName() . "<br/><br/>";
                echo $menuItem->getPrice() . "<br/>";
                echo $menuItem->getDescription();
            }
         }
    }

    public function isItemVegetarian ($name)
    {
        $breakfastIterator = $this->pancakeHouseMenu->createIterator();
        if ($this->isVegetarian($name, $breakfastIterator)) {
            return true;
        }

        $dinerIterator = $this->dinerMenu->createIterator();
        if ($this->isVegetarian($name, $dinerIterator)) {
            return true;
        }

        $cafeIterator = $this->cafeMenu->createIterator();
        if ($this->isVegetarian($name, $cafeIterator)) {
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
