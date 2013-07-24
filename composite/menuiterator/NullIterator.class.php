<?php
class NullIterator implements _Iterator
{
    public function __construct ()
    {
        return null;
    }

    public function hasNext ()
    {
        return false;
    }

    public function remove ()
    {
        throw new Exception();
    }
}
