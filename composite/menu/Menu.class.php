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
        $this->menuComponets[] = $menuComponet;
    }

    public function remove ($menuComponet)
    {
        foreach ($this->menuComponets as $k => $v) {
            if ($v == $menuComponet) {
                unset($this->menuComponets[$k]);
            }
        }
    }

    public function getChild ($i)
    {
        return $this->menuComponets[$i] ;
    }

    public function getName ()
    {
        return $this->name;
    }

    public function getDescription ()
    {
        return $this->description;
    }

    public function _print ()
    {
        echo '<br/>' . $this->getName();
        echo ', ' . $this->getDescription();
        echo '------------------------';
        $interator = $this->menuComponets->iterator();
        while ($interator->hashNext()) {
            $menuComponet = $interator->next(); 
            $menuComponet->_print();
        }
    }
}
