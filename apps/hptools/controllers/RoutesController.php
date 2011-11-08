<?php

namespace hptools;
/**  
 * !DefaultAction list
 * */
class RoutesController extends \HappyPuppy\Controller
{
	function _list()
	{
		$routetree = \HappyPuppy\Cache::get("routetree");
		$this->pretty_routes = $routetree->PrettyListOfRoutes();
	}
}

?>