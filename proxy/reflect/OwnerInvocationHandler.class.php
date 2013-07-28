<?php
class OwnerInvocationHandler implements InvocationHandler
{
    private $person;
    private $proxy;
    
    public function __construct ($person)
    {
        $this->person = $person;
        $this->proxy = new ReflectionObject($person);
    }

    public function __call ($name, $args)
    {
        $args = isset($args[0]) ? $args[0] : $args;
        try {
            $method = new ReflectionMethod($this->proxy->getName(), $name);
            if (strpos($name, 'setHotOrNotRating') !== false) {
                throw new Exception();
            } else {
                return $method->invoke($this->person, $args);
            }
            /*
            if (strpos($method, 'get') !== false) {
                return $obj->invoke($method, $args);
            } elseif (strpos($method, 'setHotOrNotRating') !== false) {
                throw new Exception();
            } elseif (strpos($method, 'set')) {
                return $obj->invoke($method, $args);
            }
             */
        } catch (Exception $e) {
            throw new Exception($e->getTraceAsString());
        }
        return null;
    }
}
