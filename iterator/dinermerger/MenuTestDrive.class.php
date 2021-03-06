<?php
require_once 'autoload.php';

class MenuTestDrive
{
    public function __construct ()
    {
        $pancakeHouseMenu = new PancakeHouseMenu();
        $dinerMenu = new DinerMenu();
        $cafeMenu = new CafeMenu();
        $waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);
        $waitress->printMenu();
    }

    public function printMenu ()
    {
        $pancakeHouseMenu = new PancakeHouseMenu();

        $breakfastItems = $pancakeHouseMenu->getMenuItems();
        for ($i = 0, $len = count($breakfastItems); $i < $len; $i++) {
           $menuItem = $breakfastItems[$i]; 
           echo $menuItem->getName() . "\t\t";
           echo $menuItem->getPrice() . "\t";
           echo $menuItem->getDescription();
        }

        $dinerMenu = new DinerMenu();
        $lunchItems = $dinerMenu->getMenuItems();

        for ($i = 0, $len = count($lunchItems); $i < $len; $i++) {
           $menuItem = $lunchItems[$i]; 
           echo $menuItem->getName() . "\t\t";
           echo $menuItem->getPrice() . "\t";
           echo $menuItem->getDescription();
        }
    }
}

$obj = new MenuTestDrive();
