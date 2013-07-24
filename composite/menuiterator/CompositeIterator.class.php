<?php
class CompositeIterator implements _Iterator
{
    private $stack;

    public function __construct ($stack)
    {
        $this->stack = $stack;
    }

    public function next ()
    {
        $item = current($this->stack);
        next($this->stack);
        return $item;
    }

    public function hasNext ()
    {
        return key($this->stack) !== null;
    }

    public function remove ()
    {
        throw new Exception();    
    }
}
