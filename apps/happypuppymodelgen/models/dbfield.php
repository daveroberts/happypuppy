<?php

class dbfield
{
	public $name;
	public $type;
	public $null;
	public $key;
	public $default;
	public $extra;
	function __construct($name)
	{
		$this->name = $name;
	}
}

?>
