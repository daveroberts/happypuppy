<?php

namespace hptools;
class ServiceController extends \HappyPuppy\Controller
{
	function defaultAction(){ return "list"; }
	function _list(){}
	function frame()
	{
		$this->layout = false;
		$this->hpinfo_url = $this->addParam($_SERVER['REQUEST_URI'], "__hpinfo", "true");
		$this->actual_url = $this->addParam($_SERVER['REQUEST_URI'], "__hpactual", "true");
	}
	private function addParam($url, $param, $value)
	{
		if (strpos($url, '?'))
		{
			return $url."&".$param."=".$value;
		}
		else
		{
			return $url."?".$param."=".$value;
		}
	}
}

?>
