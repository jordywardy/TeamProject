<?php
/**
 * 
 * @author Luca and barry
 * @abstract this controller is in charge of...
 * @version 1.0
 */
include "validationSuite.php";
class Controller {
	private $model;
	private $action;
	public function __construct($model, $action) {
		$this->model = $model;
		$this->action = $action;
		
		switch ($action) {
			case "delete" :
				$this->deleteGames();
				break;
			case "insertUser" :
				$this->insertNewUser();
				break;
			case "signin" :
				$this->signinvalidation();
				break;
			case "updateGames" :
				$this->prepUpdateGames();
			    break;
			case "updateg" :
				$this->UpdateGame();
				break;
			case "insertgames" :
				$this->prepNewEntry();
				break;
			case "insertgame" :
				$this->insertgames();
				break;
			case "search" :
				$this->search();
				break;
			case "logout" :
				$this->logout();
				break;
		}
		
		// default actions
		 $this->defaultActions ();
	}
	public function deleteGames() {
		if (! empty ( $_REQUEST ["gamesid"] ))
			if (is_numeric ( $_REQUEST ["gamesid"] ))
				if ($_REQUEST ["gamesid"] >= 0)
					$this->model->deleteGames ( $_REQUEST ["gamesid"] );
	}
	public function insertNewUser() {
		// validate the inputs (name, surname, email, password)
		if (! empty ( $_REQUEST ["name"] ) && ! empty ( $_REQUEST ["surname"] ) && ! empty ( $_REQUEST ["email"] ) && ! empty ( $_REQUEST ["password"] )) 
		{
			$this->model->insertNewUser ( $_REQUEST ["name"], $_REQUEST ["surname"], $_REQUEST ["email"], $_REQUEST ["password"] );
		}
	}
	
	public function signinvalidation()
	{
		echo $_REQUEST ["password"];
		echo $_REQUEST ["email"];
		//Validates the user and logs them in
		if (! empty ( $_REQUEST ["email"] ) && ! empty ( $_REQUEST ["password"] ) )
		{
			$this->model->validate_user ( $_REQUEST ["email"], $_REQUEST ["password"] );
		}
	}
	public function prepUpdateGames() 
	{
		if (! empty ( $_REQUEST ["gamesid"] ))
			if (is_numeric ( $_REQUEST ["gamesid"] ))
				if ($_REQUEST ["gamesid"] >= 0)
					$this->model->prepareUpdateGamesForm( $_REQUEST ["gamesid"] );
	}
	public function UpdateGame()
	{
		
		if(! empty ( $_REQUEST ["gamesid"] ))
		{		
			$this->model->updateGames( $_REQUEST ["title"], $_REQUEST ["year"], $_REQUEST ["genre"],$_REQUEST ["age"],$_REQUEST ["gamesid"] );
			$this->model->isUpdateGamesFormVisible = false;
		}
	}
	
	public function insertgames()
	{
		$this->model->insertGames( $_REQUEST ["title"], $_REQUEST ["year"], $_REQUEST ["genre"],$_REQUEST ["age"]);
		$this->model->isUpdateGamesFormVisible = false;
	}
		
	
	public function prepNewEntry()
	{
		$this->model->prepareUploadForm();
	}
	public function search()
	{
		
		if (! empty ($_REQUEST ["search"]))
		{
			$this-> model-> search($_REQUEST ["search"]);
		}
	}
	public function Logout()
	{
		$this->model->LogOut();
	}
	public function defaultActions() {
		$this->model->date = date ( "F j, Y" );
		$this->model->prepareGamesList ();
	}
}
?>