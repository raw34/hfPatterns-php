<?php
require_once 'autoload.php';
//use strategy\test1, strategy\test2, strategy\test3;

try {
    //print file_exists('test1.class.php');
    //print 'namespace ' . __NAMESPACE__ . "\n";
    $obj = new strategy\test1();
    $obj = new strategy\test2();
    $obj = new strategy\test3();
} catch (Exception $e) {
   echo $e->getMessage(); 
}
