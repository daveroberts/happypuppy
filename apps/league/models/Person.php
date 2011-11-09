<?php

namespace league;
class Person extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	static function GetByIP()
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		$person = Person::GetByipaddress($ip);
		if ($person != null){ return $person; }
		$person = new Person();
		$person->ipaddress = $ip;
		$person->administrator = false;
		$result = $person->save($error, $debug);
		return $person;
	}
	
	static function LoadLoggedInUser()
	{
		if (isset($_SESSION["person_id"]))
		{
			return Person::Get($_SESSION["person_id"]);
		}
		return null;
	}
	
	public function toString()
	{
		$out = $this->name." ".$this->ipaddress;
		if ($this->administrator){ $out .= " (admin)"; }
		return $out;
	}
	
	public static function CheckLogin($username, $password)
	{
		$people = Person::FindByName($username);
		if (count($people) == 0)
		{
			return null;
		}
		if (count($people) == 1)
		{
			$person = end($people);
			$md5_password = MD5($password);
			if (strcasecmp($person->password, $md5_password) == 0)
			{
				return $person;
			}
			else
			{
				return null;
			}
		}
	}
}

?>