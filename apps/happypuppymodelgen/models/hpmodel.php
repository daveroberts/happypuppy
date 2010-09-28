<?php

require_once("dbtable.php");
require_once("dbfield.php");

class hpmodel
{
	private $dbtablename;
	private $plural;
	private $pk;
	private $fields;

	function __construct($dbtable)
	{
		$this->dbtablename = $dbtable->name;
		$this->plural = $dbtable->name."s";
		$this->pk = $dbtable->pk();
		$this->fields = array();
		foreach($dbtable->dbfields as $dbfield)
		{
			$this->fields[$dbfield->name] = $dbfield->type;
		}
	}
	function toYAML()
	{
		$arr = array();
		$arr[$this->dbtablename] = array();
		$arr[$this->dbtablename]["table"] = $this->dbtablename;
		$arr[$this->dbtablename]["plural"] = $this->plural;
		$arr[$this->dbtablename]["pk"] = $this->pk;
		$arr[$this->dbtablename]["fields"] = array();
		foreach($this->fields as $fieldname=>$fieldtype)
		{
			$arr[$this->dbtablename]["fields"][$fieldname] = $fieldtype;
		}
		$yaml = Spyc::YAMLDump($arr, true);
		return $yaml;
	}
	function toClass()
	{
		ob_start();
		require('hpmodel.tpl.php');
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
}
?>