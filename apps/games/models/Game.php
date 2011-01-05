<?php

namespace games;
class Game extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
		parent::has_one("system");
	}
}

?>