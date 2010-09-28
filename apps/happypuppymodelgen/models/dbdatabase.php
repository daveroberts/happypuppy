<?php

require("dbtable.php");

class dbdatabase
{
	public $name;
	public $tables;
	function __construct($name)
	{
		$this->name = $name;
		$this->tables = array();
		foreach(DB::query("SHOW TABLES IN ".$name) as $row)
		{
			$table = new dbtable($name, $row["Tables_in_".$name]);
			$this->tables[] = $table;
		}
	}
}

?>
