<?php 

function __autoload($class_name){
	$parts = explode('\\', $class_name);
    require end($parts) . '.php';
}
 use newclass as test;
 use testclass as ch ;

$test = new ch\ClassTest();
$test->testOne();
$test = new test\ClassNew();
$test->testOne();