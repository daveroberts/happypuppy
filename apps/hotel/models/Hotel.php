<?php

namespace hotel;
class Hotel extends \HappyPuppy\Model
{
	function __construct()
	{
		parent::__construct();
		parent::has_many("rooms");
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
