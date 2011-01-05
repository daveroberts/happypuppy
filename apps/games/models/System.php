<?php

namespace games;
class System extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct();
		parent::has_many("games");
	}
}

?>