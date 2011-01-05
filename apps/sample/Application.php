<?php
namespace sample;
class Application extends \HappyPuppy\Application
{
	// if a URL doesn't specify a controller (for example http://hostname/sample)
	// then the doc controller will be used.  Note that the doc controller must define
	// a default action method as well.
	function defaultController(){ return "doc"; }
	public function __init()
	{
		// This code will run before your controller's code is called
	}
}

?>