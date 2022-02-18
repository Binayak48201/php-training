<?php 

namespace App\Core\database;
use PDO;
use PDOException;

class Connection 
{
	public static function make($connect){
		try {
			return new PDO("{$connect['connect']};dbname={$connect['database']}", 
				$connect['username'], 
				$connect['password']
			);
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}