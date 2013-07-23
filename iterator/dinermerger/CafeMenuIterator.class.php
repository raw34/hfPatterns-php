<?php
class CafeMenuIterator implements _Iterator
{
    private $items;
    
    public function __construct ($hashtable)
    {
        $this->items = array_values($hashtable);
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
