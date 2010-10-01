<?php

namespace happypuppytools;
//xxxrequire_once($_ENV["app"]->root()."models/dbdatabase.php");
//xxxrequire_once($_ENV["app"]->root()."models/dbtable.php");
//xxxrequire_once($_ENV["app"]->root()."models/hpmodel.php");

class TableController extends \HappyPuppy\Controller
{
	public function _list($dbname)
	{
		$dbdatabase = new dbdatabase($dbname);
		$this->dbname = $dbname;
		foreach($dbdatabase->tables as $dbtable)
		{
			$this->tables[] = $dbtable;
		}
	}
	public function show($dbname, $tablename)
	{
		$this->dbtable = new dbtable($dbname, $tablename);
		$this->hpmodel = new hpmodel($this->dbtable);
		switch ($this->responds_to)
		{
			case "yaml":
				$this->view_template = "table/yaml";
				header('Content-Type: text/plain');
			case "class":
				$this->layout = false;
				$this->view_template = "table/class";
		}
	}
}
?>