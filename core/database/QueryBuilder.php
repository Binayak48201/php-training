<?php

class QueryBuilder
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $data)
	{
		$insert = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($data)),
			':' . implode(', :', array_keys($data))
		);

		try {
			$statement = $this->pdo->prepare($insert);

			$statement->execute($data);
		} catch (Exception $e) {
			die($e);
		}
	}

	// public function showByID($table, $id)
	// {
	// 	$query = $this->pdo->prepare("SELECT * from $table where id = $id");
	// 	$query->execute();
	// 	// return $query;
	// 	return $query;
	// }

	public function delete($table, $id)
	{
		$query = $this->pdo->prepare("DELETE from $table where id = $id");
		$query->execute();
		// return $query;
		return $query;
	}
}
