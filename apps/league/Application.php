<?php
namespace league;

include_once '/content/php/open_flash_chart_object.php';
include_once( '/content/php/open-flash-chart.php' );

/**  
 * !DefaultController survey
 * */
class Application extends \HappyPuppy\Application
{
	public function __init()
	{
		// This code will run before your controller's code is called
		// variables created here are passed to your controller
		$this->person = Person::LoadLoggedInUser();
		if ($this->person == null)
		{
			$this->person = Person::GetByIP();
			if ($this->person != null)
			{
				$_SESSION["person_id"] = $this->person->id;
			}
		}
	}
}

?>