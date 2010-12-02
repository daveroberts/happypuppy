<?php

namespace hptools;
class RoutesController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function _list()
	{
		$routetree = \HappyPuppy\Cache::get("routetree");
		$this->pretty_routes = $routetree->PrettyListOfRoutes();
	}
}

?>