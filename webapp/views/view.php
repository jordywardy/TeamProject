<?php

class View {
	private $model;
	private $controller;
	public function __construct($controller, $model) {
		$this->controller = $controller;
		$this->model = $model;
	}
	public function getHTMLOutput() {
		// prepare all the variables for the template
		
		// from the config.inc.php
		$title = TITLE_WEB_APP;
		$quote = TITLE;
		$footer = FOOTER;
		
		// from the model
		$date = $this->model->date;
		// create the user list
		$gamesList = $this->model->gamesList;
		
		$userUpdateForm = "";
		$isUpdateUserFormVisible = false;
		$title = "";
		$year = "";
		$genre = "";
		$age = "";
		$gamesid = "";
		
		$showerror = $this->model->showerror;
		$errorMessage = $this->model->showerrormsg;
		$successUpdateMessage = $this->model->successUpdateMessage;
		$showUpdateSuccessMessage = $this->model->showUpdateSuccessMessage;
		
		if ($this->model->isUpdateUserFormVisible) {
			$isUpdateUserFormVisible = true;
			$username = $this->model->userInfo ["name"];
			$surname = $this->model->userInfo ["surname"];
			$email = $this->model->userInfo ["email"];
			$idUser = $this->model->userID;
		}
		
		// include the basic HTML5 template
	
	if  ($_SESSION["Logged_in"] == true)
		{
			include ("template_homepage.php");
		}
		
	elseif ($_SESSION["Logged_in"] == false)
		{
				include ("template_html.php");
		}
	}
}


?>