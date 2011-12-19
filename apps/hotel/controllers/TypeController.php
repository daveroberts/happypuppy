<?php

namespace hotel;

class TypeController extends \HappyPuppy\Controller
{
	function show($id)
	{
		$this->type = Type::Get($id);
	}
}

?>
