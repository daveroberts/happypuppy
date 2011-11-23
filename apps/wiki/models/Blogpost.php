<?php

namespace wiki;
class Blogpost extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct();
	}

	public function bless($current_user, $action, &$reason)
	{
		if (strcmp($action, 'author') == 0)
		{
			if (!logged_in())
			{
				$reason = "You are not logged in";
				return false;
			}
			return true;
		}
	}
}
