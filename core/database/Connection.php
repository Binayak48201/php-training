<?php

namespace App\Core\database;

use PDO;
use PDOException;

class Connection
{
	public static function make($config)
	{
		try{
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options'],
			);
		}catch(PDOException $e){
			die('Could not connect');
		}
	}
}



