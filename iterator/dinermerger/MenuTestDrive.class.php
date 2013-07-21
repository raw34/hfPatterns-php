<?php
class MenuTestDrive
{
    public function __construct ()
    {
        $dinerMenu = new DinerMenu();
        $waitress = new Waitress($dinerMenu);
        $waitress->printMenu();
    }

    public function printMenu ()
    {
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
