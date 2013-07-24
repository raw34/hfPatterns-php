<?php
class Menu extends MenuComponent
{
    private $menuComponets = array();
    private $name;
    private $description;

    public function __construct ($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add ($menuComponet)
    {
        $this->menuComponents[] = $menuComponet;
    }

    public function remove ($menuComponet)
    {
        foreach ($this->menuComponents as $k => $v) {
            if ($v == $menuComponet) {
                unset($this->menuComponents[$k]);                
            }    
        }
    }

    public function getChild ($i)
    {
        return $this->menuComponents[$i];
    }

    public function getDescription ()
    {
        return $this->description;
    }

    public function createIterator ()
    {
        return new CompositeIterator($this->menuComponents);
    }

    public function _print ()
    {
        echo '<br/>' . $this->getName();
        echo '<br/>' . $this->getDescription();
        echo '<br/>-------------------------<br/>';
        $iterator = $this->createIterator();
        while ($iterator->hasNext()) {
            $menuComponet = $iterator->next(); 
            $menuComponet->_print();
        }
    }
}
