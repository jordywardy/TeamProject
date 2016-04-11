<?php
/* 
author Mark and Jordan 
*/
class GamesDAO
{
	
	private $dbManager;
	
	
	function GamesDAO($DBMngr)
	{
		$this->dbManager = $DBMngr;
	}
	public function get($id) 
	{
		$sql = "SELECT * ";
		$sql .= "FROM games ";
		if ($id != null)
			$sql .= "WHERE games.id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $id, $this->dbManager->INT_TYPE );
		$this->dbManager->executeQuery ( $stmt );
		
		if (empty ( $id ))
			$result = $this->dbManager->fetchResults ( $stmt );
		else
			$result = $this->dbManager->getNextRow ( $stmt );
		return ($result);
	}
	public function delete($GamesID) 
	{
		$sql = "DELETE FROM games ";
		$sql .= "WHERE id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $GamesID, $this->dbManager->INT_TYPE );
		$result = $this->dbManager->executeQuery ( $stmt );
		
		return ($result);
	}
	public function updateGames($title, $year, $genre, $age, $id) {
		$sql = "UPDATE games ";
		$sql .= "SET title=?";
		$sql .= ",year=? ";
		$sql .= ",genre=? ";
		$sql .= ",age=? ";
		$sql .= "WHERE id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		
		$this->dbManager->bindValue ( $stmt, 1, $title, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 2, $year, $this->dbManager->INT_TYPE );
		$this->dbManager->bindValue ( $stmt, 3, $genre, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $age, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 5, $id, $this->dbManager->INT_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );

		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
			return (true);
		} else
			return (false);
	}
	public function insertGames($title,$year,$genre, $age) 
	{
		$sql = "Insert into games";
		$sql .= "(title,year,genre,age)";
		$sql .= "values(?,?,?,?)";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		
		$this->dbManager->bindValue ( $stmt, 1, $title, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 2, $year, $this->dbManager->INT_TYPE );
		$this->dbManager->bindValue ( $stmt, 3, $genre, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $age, $this->dbManager->STRING_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );

		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) 
		{
			return (true);
		} 
		else
			return (false);
	}
	public function search($title)
	{
		$sql = "SELECT * ";
		$sql .= "FROM games ";
		$sql .= "WHERE games.title like '%{$title}%'";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $title, $this->dbManager->STRING_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );
		$result = $this->dbManager->fetchResults ( $stmt );
		return ($result);
	}
}