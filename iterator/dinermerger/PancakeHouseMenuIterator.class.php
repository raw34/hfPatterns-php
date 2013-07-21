<?php
class PancakeHouseMenuIterator implements Iterator
{
    private $items;
    private $posison;
    
    public function __construct ($items)
    {
        $this->items = $items;
    }
    public function next ()
    {
        $obj = $this->items->get($this->positon);
        $this->positon++;
        return $obj;
    }

    public function hasNext ()
    {
        if ($this->positon >= count($this->items)) {
            return false;
        } else {
            return true;
        }
    }
}
