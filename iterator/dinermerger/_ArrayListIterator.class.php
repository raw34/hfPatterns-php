<?php
class _ArrayListIterator implements _Iterator
{
    private $items;

    public function __construct ($items)
    {
        $this->items = $items;
    }

    public function next ()
    {
        $menuItem = next($this->items);
        return $menuItem;
    }

    public function hasNext ()
    {
        if (key($this->items) == null) {
            return false;
        } else {
            return true;
        }
    }
}
