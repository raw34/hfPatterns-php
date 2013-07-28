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
        //throw new Exception();
        try {
            $rf_obj = new ReflectionObject($this->person);
            $fun = new ReflectionMethod($rf_obj->getName(), $method);
            if (strpos($method, 'setHotOrNotRating') !== false) {
                throw new Exception();
            } else {
                return $fun->invoke($args);
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
            //echo $e->getMessage();
        }
        return null;
    }
}
