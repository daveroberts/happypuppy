<?php

namespace wiki;
/** So am I! */
class WikiController extends \HappyPuppy\Controller
{
	function __init()
	{
		$this->defaultAction = "ubuntu";
	}

	function raffi()
	{
		$this->render_text("I am so awesome!");
	}
	
	function ubuntu()
	{
		$this->render_text("Hardcoded article about Ubuntu:");
	}
}
?>
