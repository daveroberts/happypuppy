<?php

namespace hotel;

class RoomController extends \HappyPuppy\Controller
{
	function show($id)
	{
		$this->room = Room::Get($id);
	}
}

?>
