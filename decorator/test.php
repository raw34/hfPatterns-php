<?php
abstract class A {
    public function test () {}
}

abstract class B extends A {
    public abstract function test ();
}

class C extends B {
    public function __construct () {
        $this->test(); 
    }

    public function test () {
       print 'C';
    }
}
$obj = new C();
