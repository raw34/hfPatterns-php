<?php
class NonOwnerInvocationHandler implements InvocationHandler
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
        //throw new Exception();
        $args = isset($args[0]) ? $args[0] : $args;
        try {
            $method = new ReflectionMethod($this->proxy->getName(), $name);
            if (strpos($name, 'set') !== false && $name !== 'setHotOrNotRating') {
                throw new Exception();
            } else {
                return $method->invoke($this->person, $args);
            }
        } catch (Exception $e) {
            throw new Exception($e->getTraceAsString());
        }
        return null;
    }
}
