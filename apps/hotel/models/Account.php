<?php

namespace hotel;
class Account extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct();
	}

	public static function Login($username, $password)
	{
		$username=strtolower(trim($username));
		$password = Account::SaltHashPW($password);
		$accounts = Account::Where("username = '?' AND password = '?'", $username, $password);
		if (count($accounts) == 0) { return null; }
		return reset($accounts);
	}

	public static function SaltHashPW($plain)
	{
		return sha1($plain."JUxRAYUGsx95HnUc");
	}
}
