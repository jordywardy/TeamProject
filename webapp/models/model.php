<?php
/**
 * 
 * @author Luca
 * @abstract this model is in charge of...
 * @version 1.0
 */
// includes the DB manager

include ("DB/pdoDBManager.php");
include ("DB/DAO/UsersDAO.php");
include ("DB/DAO/GamesDAO.php");
class Model {
	// private variables
	private $DBManager = null;
	private $dbLink = null;
	private $usersDAO = null;
	private $gamesDAO = null;
	// public variables
	public $str;
	public $date;
	public $userList;
	public $gamesList;
	
	public $isUpdateUserFormVisible;
	public $isUpdateGamesFormVisible;
	public $isInsertGamesFormVisible;
	public $userInfo;
	public $gamesInfo;
	
	public $userID;
	public $gamesID;
	
	public $showerrormsg;
	public $showerror = False;
	public $showUpdateSuccessMessage = false;
	public $successUpdateMessage;
	
	public function __construct() {
		$this->DBManager = new pdoDBManager ();
		$this->DBManager->openConnection ();
		$this->usersDAO = new UsersDAO ( $this->DBManager );
		$this->gamesDAO = new GamesDAO ( $this->DBManager );
	}
	public function prepareGamesList()
	{
		$this->gamesList = $this->gamesDAO->get(null);
	}
	public function deleteGames($gamesID) {
		$this->gamesDAO->delete ( $gamesID );
	}
	public function insertNewUser($name, $surname, $email, $password) {
		$this->usersDAO->insertNewUser ( $name, $surname, $email, $password );
	}
	
	public function validate_user($UserName, $password)
	{
		
		$_SESSION["Logged_in"]=$this->usersDAO->validate_User ( $UserName,$password );
		
		if ($_SESSION["Logged_in"]==false)
		{
			$this->ShowMsg=True;
		}
	}
	public function prepareUpdateGamesForm($gamesID)
	{
		$this->isUpdateGamesFormVisible = true;
		$this->gamesInfo = $this->gamesDAO->get($gamesID);
		$this->gamesID = $gamesID;
	}
	public function prepareUploadForm()
	{
		$this->isInsertGamesFormVisible = true;
	}
	
	public function prepareUpdateForm()
	{
		$this->isUpdateGamesFormVisible = true;
	}
	public function updateGames($title,$year,$genre,$age,$gamesID)
	{
		$this->gamesDAO->updateGames($title,$year,$genre,$age,$gamesID);
	}
	public function insertGames($title,$year,$genre,$age)
	{
		$this->gamesDAO->insertGames($title,$year,$genre,$age);
	}
	public function search($title)
	{
		$this->SearchResults = $this->gamesDAO->search($title);
		if (empty ($this->SearchResults))
		{
			$this->showerrormsg=True;
		}
	}
	public function LogOut()
	{
		$_SESSION["Logged_in"]=false;
	}
	
	public function __destruct() {
		$this->DBManager->closeConnection ();
	}
}

?>