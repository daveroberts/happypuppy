<?php

class happypuppymodelgenApplication extends Application
{
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		//xxxrequire_once($_ENV["app"]->root().'initdb.php'); // initialize the database.
		//xxxinclude_dir($_ENV["app"]->root().'views/helpers/*.php');
		$this->default_controller = "database";
	}
}

?>
