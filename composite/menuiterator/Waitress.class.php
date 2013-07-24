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

    public function printVegetarianMenu ()
    {
        $iterator = $this->allMenus->createIterator();
       /* echo '<pre>';
        var_dump($iterator);
        echo '</pre>';
        */
        echo '<br/>VEGETARIAN MENU<br/>';
        $i = 0;
        while ($iterator->hasNext()) {
            $menuComponet = $iterator->next(); 
            try {
                if ($menuComponet->isVegetarian()) {
                    $menuComponet->_print();
                }
            } catch (Exception $e) {
                echo $i;
                //continue; 
            }
            $i++;
        }
    }
}
