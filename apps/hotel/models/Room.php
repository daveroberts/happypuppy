<?php

namespace hotel;
class Room extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
		parent::belongs_to("hotel");
		parent::belongs_to("type");
	}

	public function getUpgradableRooms()
	{
		$rooms = Room::Find(
			array("hotel_id = ? AND type_id > ? AND available = 1",
			$this->hotel_id, $this->type_id));
		return $rooms;
	}

	public function bless($current_user, $action, &$reason)
	{
		if (strcmp($action, 'change') == 0)
		{
			if (!logged_in())
			{
				$reason = "You are not logged in";
				return false;
			}
			return true;
		}
	}
	
	public function authorize($current_user, $action, &$reason)
	{
		return $this->bless($current_user, $action, $reason);
	}

	public static function GenerateRooms($number)
	{
		$hotel_id = 1;
		for($x = 0; $x < $number; $x++)
		{
			$r = new Room();
			$r->hotel_id = $hotel_id;
			if ($hotel_id == 1) { $hotel_id = 2; } else { $hotel_id = 1; }
			$r->number = rand(100, 999);
			$r->code = Room::Rand_str(16);
			$r->type_id = rand(1,4);
			$r->available = (rand(1,6) != 6);
			$r->save();
		}
	}

	private static function Rand_str($length)
	{
		$alphNums = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";       
		$newString = str_shuffle(str_repeat($alphNums, rand(1, $length)));
		return substr($newString, rand(0,strlen($newString)-$length), $length);
	}
}

?>
