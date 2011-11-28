<?php

namespace wiki;
class Account extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct();
	}

	public static function Login($username, $password)
	{
		$username=strtolower(trim($username));
		$password=sha1($password."cIrmkK6YJbTtsyv");
		$accounts = Account::Where("username = '?' AND password = '?'", $username, $password);
		if (count($accounts) == 0) { return null; }
		return reset($accounts);
	}
}
