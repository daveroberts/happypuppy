<?php
namespace happypuppymodelgen;
require_once("dbfield.php");

class dbtable
{
	public $name;
	public $dbfields;
	function __construct($dbname, $tablename)
	{
		$this->name = $tablename;
		$this->dbfields = array();
		foreach(\HappyPuppy\DB::query("DESCRIBE ".$dbname.".".$tablename) as $table)
		{
			$f = new dbfield($table["Field"]);
			$f->type = $table["Type"];
			$f->null = $table["Null"];
			$f->key = $table["Key"];
			$f->default = $table["Default"];
			$f->extra = $table["Extra"];
			$this->dbfields[] = $f;
		}
	}
	function pk()
	{
		foreach($this->dbfields as $dbfield)
		{
			if ($dbfield->key == "PRI")
			{
				return $dbfield->name;
			}
		}
		return "";
	}
}

?>
