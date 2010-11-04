<?php

namespace happypuppytools;
class happypuppytoolsApplication extends \HappyPuppy\Application
{
	function defaultController(){ return "Routes"; }
	// set variables here that are application wide
	// import libraries used in this application
	public function __init()
	{
		$this->title = "Happy Puppy Tools";
	}
}

?>
