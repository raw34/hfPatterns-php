<?php
class PancakeHouseMenuIterator implements _Iterator
{
    private $items;
    
    public function __construct ($items)
    {
        $this->items = $items;
    }
    public function next ()
    {
        $item = current($this->items);
        next($this->items);
        return $item;
    }

    public function hasNext ()
    {
        if (key($this->items) === null) {
            return false;
        } else {
            return true;
        }
    }
}
