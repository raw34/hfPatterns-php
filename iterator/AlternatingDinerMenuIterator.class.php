<?php
class AlternatingDinerMenuIterator implements _Iterator
{
    private $list;
    private $position;

    public function __construct ($list)
    {
        $this->list = $list; 
    }
}
