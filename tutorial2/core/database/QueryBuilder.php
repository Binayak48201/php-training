<?php

namespace App\Core\database;

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table){
		$statement = $this->pdo->prepare("Select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(\PDO::FETCH_CLASS);
	}
}