<?php

namespace happypuppytools;
class RoutesController extends \HappyPuppy\Controller
{
	function __init()
	{
		$this->defaultAction = "list";
	}

	function _list()
	{
		$routetree = \HappyPuppy\Cache::get("routetree");
		$this->pretty_routes = $routetree->PrettyListOfRoutes();
		//print_r($this->pretty_routes); exit();
	}
}

?>
