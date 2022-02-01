<?php 
// Abstract class provide a base or template for any sub-classes
// Classes defined as abstract cannot be instiated, and any class that contains at least on abstract method must also be abstact.
// abstract class Achivement
// {
// 	public function name()
// 	{
// 		$classs = (new ReflectionClass($this))->getShortName();  FirstCommenter
// 		return preg_match('/[A-Z]/', '$0',$classs);
// 	}
// 	abstract public function promoted();
// }
class FirstCommenter 
{
	public function promoted()
	{
		$classs =  (new ReflectionClass($this))->getShortName();
		return preg_match('/([A-Z])\w+/', '$0',$classs);
	} 
}
$ach = new FirstCommenter();
var_dump($ach->promoted());