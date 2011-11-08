<?php


namespace league;
class LoginController extends \HappyPuppy\Controller
{
	/**
	 * !NotRoute
	 **/
	function logged_in()
	{
		if ($this->person == null)
		{
			$this->redirectTo("/login/login");
		}
	}
	/**
	 * !NotRoute
	 **/
	function is_admin()
	{
		if ($this->person == null || (
			$this->person != null && !$this->person->administrator
		))
		{
			setflash("You must be logged on as an administrator to access this page");
			$this->redirectTo("/login/login");
		}
	}
	function login()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$person = Person::CheckLogin($_POST["username"], $_POST["password"]);
			if ($person == null)
			{
				setflash("Invalid username / password");
			}
			else
			{
				$_SESSION["person_id"] = $person->id;
				$this->redirectTo("/surveyadmin/list");
			}
		}
	}
	function bysession()
	{
		$person = Person::GetByIP();
		if ($person == null)
		{
			$this->renderText("Could not retrieve user");
		}
		$_SESSION["person_id"] = $person->id;
		$this->redirectTo("/quiz/list");
	}
	function logout()
	{
		unset($_SESSION["person_id"]);
		setflash("You have been logged out");
		$this->redirectTo("/login/login");
	}
}

?>