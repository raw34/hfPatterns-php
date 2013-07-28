<?php
class NonOwnerInvocationHandler implements InvocationHandler
{
    private $person;

    public function __construct ($person)
    {
        $this->person = $person;
    }

    public function __call ($method, $args)
    {
        //throw new Exception();
        $args = isset($args[0]) ? $args[0] : $args;
        try {
            $rf_obj = new ReflectionObject($this->person);
            $fun = new ReflectionMethod($rf_obj->getName(), $method);
            if (strpos($method, 'set') !== false && $method !== 'setHotOrNotRating') {
                throw new Exception();
            } else {
                return $fun->invoke($this->person, $args);
            }
        } catch (Exception $e) {
            throw new Exception($e->getTraceAsString());
        }
        return null;
    }
}
