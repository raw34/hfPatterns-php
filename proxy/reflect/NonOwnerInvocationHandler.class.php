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
        try {
            $rf_obj = new ReflectionObject($this->person);
            $fun = new ReflectionMethod($rf_obj->getName(), $method);
            if (strpos($method, 'set') !== false) {
                throw new Exception();
            } else {
                return $fun->invoke($args);
            }
        } catch (Exception $e) {
            //
        }
        return null;
    }
}
