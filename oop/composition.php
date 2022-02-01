<?php 
// Combining types to build more complex object.
// OBject compostion is a when a one class has a pointer to another class or behaviour.
// When i say pointer it means some property or method on the main class
class Class1
{
	public $test;

	function methodName($user)
	{
		//Log
	}
}
class Class2
{
	public $ob1;

	function __construct()
	{
		$this->ob1 = new Class1();
	}
	function test()
	{
		$this->ob1->methodName();
	}
}