<?php

namespace happypuppytools;
class RoutesController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function _list()
	{
		global $db; var_dump($db); exit();
		$routetree = \HappyPuppy\Cache::get("routetree");
		$this->pretty_routes = $routetree->PrettyListOfRoutes();
		//print_r($this->pretty_routes); exit();
	}
}

?>
