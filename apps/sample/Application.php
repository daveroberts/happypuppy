<?php
namespace sample;
/**  
 * !DefaultController doc
 * */
class Application extends \HappyPuppy\Application
{
	// if a URL doesn't specify a controller (for example http://hostname/sample)
	// then the doc controller will be used.  Note that the doc controller must define
	// a default action method as well.
	public function __init()
	{
		// This code will run before your controller's code is called
	}
}

?>