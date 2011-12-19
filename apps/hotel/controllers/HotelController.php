<?php

namespace hotel;

class HotelController extends \HappyPuppy\Controller
{
	function __init()
	{
	}

	function index()
	{
		$this->redirectTo("list");
	}

	function _list()
	{
		$this->hotels = Hotel::All();
	}

	function show($id)
	{
		$this->hotel = Hotel::Get($id);
	}
}

?>
