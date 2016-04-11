<?php*
class validation_functions 
{
	public function isEmailValid($emailStr) 
	{
		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i";
		if (! preg_match ( $regex, $emailStr ))
			return (false);
		else
			return (true);
	}
}
?>
