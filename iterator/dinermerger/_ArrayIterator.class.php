<?php
class _ArrayIterator implements _Iterator
{
    private $items;
    private $position = 0;

    public function __construct ($items)
    {
        $this->items = $items;
    }

    public function next ()
    {
        $menuItem = $this->items[$this->position];
        $this->position++;
        return $menuItem;
    }

    public function hasNext ()
    {
        if ($this->position >= count($this->items) || $this->items[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }
}
