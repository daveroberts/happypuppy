<?php

namespace hotel;
class Hotel extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
		parent::has_many("rooms");
	}
	
	function __get($name)
	{
		if (strcmp($name, 'available_rooms') == 0)
		{
			$q = new \HappyPuppy\SQLBuilder();
			$q->from("room");
			$q->where("hotel_id = ?");
			$q->where("available = 1");
			$rooms = Room::FindBySQL($q->toString(), $this->id);
			return $rooms;
		}
		return parent::__get($name);
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
	
	public static function Generate()
	{
		$hotel_names = array("Watergate", "Sandgate", "Taj Mahal", "Venetian",
			"MGM Grand", "Casino Royale", "Luxor");
		foreach($hotel_names as $hotel_name)
		{
			$h = new Hotel();
			$h->name = $hotel_name;
			$h->save();
		}
		Room::Generate(count($hotel_names) * 100);
	}
}

?>
