<?php
class PancakeHouseMenuIterator implements _Iterator
{
    private $items;
    private $position = 0;
    
    public function __construct ($items)
    {
        $this->items = $items;
    }
    public function next ()
    {
        //$obj = $this->items->get($this->position);
        $obj = $this->items[$this->position];
        $this->position++;
        return $obj;
    }

    public function hasNext ()
    {
        if ($this->position >= count($this->items)) {
            return false;
        } else {
            return true;
        }
    }
}
