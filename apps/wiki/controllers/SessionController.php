<?php

namespace wiki;
class SessionController extends \HappyPuppy\Controller
{
	/**
	* !Route GET, /login
	*/
	function _new()
	{
	}

	function create()
	{
		$username = $_POST['username'];
		$plain_password = $_POST['plain_password'];
		$user = Account::Login($username, $plain_password);
		if ($user != null)
		{
			$_SESSION['account_id'] = $user->id;
			setflash("You are logged in as ".$user->username);
			$this->redirectTo("/article");
		}
		else
		{
			setflash("Login credentials are incorrect");
			$this->view_template = 'session/new';
		}
	}

	/**
	* !Route GET, /logout
	*/
	function delete()
	{
		$_SESSION['account_id'] = null;
		setflash("You have been logged out");
		$this->redirectTo("/login");
	}
}

?>
