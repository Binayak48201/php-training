<?php 
class AgeException extends Exception
{
	public static function agetLessThan0()
	{
		return "Age less than 0";
	}

	public static function AgeGreaterThan100()
	{
		return "Age greated than 100";
	}
}

class Age
{
	public $age;

	public function __construct($age)
	{
		if($age < 0)
		{
			throw new AgeException::agetLessThan0();
		}else{
			throw new AgeException::AgeGreaterThan100();
		}
		$this->age = $age;
	}
	public function giveAge()
	{
		return $this->age;
	}
}

$age = new Age(27);
var_dump($age->giveAge());
