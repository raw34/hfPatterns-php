<?php
class OwnerInvocationHandler implements InvocationHandler
{
    private $person;
    
    public function __construct ($person)
    {
        $this->person = $person;
    }

    public function __call ($method, $args)
    {
        $args = isset($args[0]) ? $args[0] : $args;
        try {
            $rf_obj = new ReflectionObject($this->person);
            $fun = new ReflectionMethod($rf_obj->getName(), $method);
            if (strpos($method, 'setHotOrNotRating') !== false) {
                throw new Exception();
            } else {
                return $fun->invoke($this->person, $args);
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
