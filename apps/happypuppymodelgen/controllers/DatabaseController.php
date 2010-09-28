<?php

//xxxrequire_once($_ENV["app"]->root()."models/dbdatabase.php");
//xxxrequire_once($_ENV["app"]->root()."models/dbtable.php");
//xxxrequire_once($_ENV["app"]->root()."models/hpmodel.php");

class DatabaseController extends Controller
{
	public function index()
	{
		$this->redirect_to_action("list");
	}
	public function _list()
	{
		foreach(DB::query("SHOW DATABASES") as $row)
		{
			$this->dbs[] = $row["Database"];
		}
	}
	public function show($dbname)
	{
		$dbdatabase = new dbdatabase($dbname);
		$this->dbname = $dbname;
		foreach($dbdatabase->tables as $dbtable)
		{
			$this->tables[] = $dbtable;
		}
	}
	public function showtable($dbname, $tablename)
	{
		$dbtable = new dbtable($dbname, $tablename);
		$hpmodel = new hpmodel($dbtable);
		print("<pre>");
		print($hpmodel->toYAML());
		print("</pre>");
		print("<pre>");
		print($hpmodel->toClass());
		print("</pre>");
		exit();
	}
}
?>