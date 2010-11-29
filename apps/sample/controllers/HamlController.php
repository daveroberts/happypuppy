<?php

namespace sample;
class HamlController extends \HappyPuppy\Controller
{
	public function defaultAction(){ return "index"; }
	public function index()
	{
		$_ENV["config"]["render_engine"] = "haml";
	}
}

?>