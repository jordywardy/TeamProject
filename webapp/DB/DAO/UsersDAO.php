<?php

class UsersDAO {
	private $dbManager;
	function UsersDAO($DBMngr) {
		$this->dbManager = $DBMngr;
	}
	public function get($id = null) {
		$sql = "SELECT * ";
		$sql .= "FROM login ";
		if ($id != null)
			$sql .= "WHERE login.id=? ";
		$sql .= "ORDER BY login.name ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $id, $this->dbManager->INT_TYPE );
		$this->dbManager->executeQuery ( $stmt );
		
		if (empty ( $id ))
			$result = $this->dbManager->fetchResults ( $stmt );
		else
			$result = $this->dbManager->getNextRow ( $stmt );
		
		return ($result);
	}
	public function insertNewUser($name, $surname, $email, $password) {
		$sql = "INSERT INTO login ";
		$sql .= "(name, surname, email, password) ";
		$sql .= "VALUES (?,?,?,?)";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $name, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 2, $surname, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 3, $email, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $password, $this->dbManager->STRING_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );
		
		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
			return (true);
		} else
			return (false);
	}
	public function delete($userID) {
		$sql = "DELETE FROM login ";
		$sql .= "WHERE id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $userID, $this->dbManager->INT_TYPE );
		$result = $this->dbManager->executeQuery ( $stmt );
		
		return ($result);
	}
	public function search($str) {
	}
	public function updateExistingUser($existingID, $name, $surname, $email) {
		$sql = "UPDATE login ";
		$sql .= "SET name=?, surname=?, email=? ";
		$sql .= "WHERE id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $name, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 2, $surname, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 3, $email, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $existingID, $this->dbManager->INT_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );

		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
			return (true);
		} else
			return (false);
	}
	public function validate_User($email,$password) 
	{
		$sql = "Select * from login";
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->executeQuery ( $stmt );
		$result = $this->dbManager->fetchResults ( $stmt );
		foreach($result as $recordNumber => $row)
		{	
			if($email==$row['email'] && $password==$row["password"])
			{
				$_SESSION["name"] = $row["name"];
				return true;
			}
		}
		return false;
	}
}
?>
