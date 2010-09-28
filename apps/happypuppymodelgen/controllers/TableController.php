<?php

//xxxrequire_once($_ENV["app"]->root()."models/dbdatabase.php");
//xxxrequire_once($_ENV["app"]->root()."models/dbtable.php");
//xxxrequire_once($_ENV["app"]->root()."models/hpmodel.php");

class TableController extends Controller
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
		$dbtable = new dbtable($dbname, $tablename);
		$hpmodel = new hpmodel($dbtable);
		switch ($this->responds_to)
		{
			case "yaml":
				header('Content-Type: text/plain');
				$this->render_text($hpmodel->toYAML());
				return;
			case "class":
				header('Content-Type: text/plain');
				$this->render_text($hpmodel->toClass());
				return;
		}
	}
}
?>