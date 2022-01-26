<?php

class Connection
{
	public static function make($data)
	{
		$config = $data['database'];
		try{
			// return new PDO('mysql:host=127.0.0.1;dbname=tutorial','root','');
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password']
			);
		}catch(PDOException $e){
			dd('Could not connect');
		}
	}
}



