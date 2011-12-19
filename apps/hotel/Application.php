<?php
namespace hotel;
/**
 * !DefaultController hotel
 * */
class Application extends \HappyPuppy\Application
{
	public function __init()
	{
		// This code will run before your controller's code is called
		$_ENV["config"]["plural_db_tables"] = false;
		require_once('lib/auth.php');
	}
}

?>
