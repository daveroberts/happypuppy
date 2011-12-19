<?php

namespace hotel;
class Type extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
		parent::has_many("rooms");
	}
}

?>
