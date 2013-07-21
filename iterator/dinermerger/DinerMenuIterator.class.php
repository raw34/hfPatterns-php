<?php
class DinerMenuIterator implements Iterator
{
    private $items;
    private $position = 0;

    public function __construct ($items)
    {
        $this->items = $items; 
    }

    public function next ()
    {
        $menuItem = $this->items[$this->positon];
        $this->positon++;
        return $menuItem;
    }

    public function hasNext ()
    {
        if ($this->positon >= count($this->items) || $this->items[$this->positon] == null) {
            return false; 
        } else {
            return true;
        }
    }
}
