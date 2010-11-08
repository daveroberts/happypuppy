<?php

namespace sample;
class Platform extends \HappyPuppy\Model
{
	function __construct(){
		parent::__construct();
		parent::has_many("games");
	}
}

?>