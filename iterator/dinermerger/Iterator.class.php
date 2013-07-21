<?php
interface Iterator
{
    public abstract function hasNext ();
    public abstract function next ();
    public abstract function remove ();
}
