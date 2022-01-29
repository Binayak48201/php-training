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

	public function selectOne($table, $column, $identifiers)
	{
		foreach ($identifiers as $key => $value) {
			$iden[] = "$key = $value";
		}

		$selectone = sprintf("select {$column} from {$table}");
		$selectone .= " where " . implode(' and ', $iden);



		$statement = $this->pdo->prepare($selectone);


		$statement->execute();

		return $statement->fetchColumn();
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


	public function update($table, $data, $identifier)
	{
		$update = sprintf("update %s set ", $table);
		foreach ($data as $key => $value) {
			if ($key != $identifier) {
				$inputs[] = " $key = ? ";
				$valueArray[] = $value;
			}
		}
		$update .= implode(',', $inputs);
		$update .= " where " . $identifier . '=' . $data[$identifier];
		try {
			$statement = $this->pdo->prepare($update);

			$statement->execute($valueArray);
		} catch (Exception $e) {
			die($e);
		}
	}

	public function delete($table, $data)
	{

		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$delete = "delete from {$table}";
		$delete .= " where " . implode(', ', array_keys($data))
			. '=:' . implode(', :', array_keys($data));

		try {
			$statement = $this->pdo->prepare($delete);
			$statement->execute($data);
		} catch (Exception $e) {
			die($e);
		}
	}
}
