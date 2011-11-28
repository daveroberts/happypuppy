<?php

namespace games;
class DBConf
{
	static function DevDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"games",
			"dbusername"=>"games",
			"dbpassword"=>"2JVewgc7zEvvrJcHTYyVZnvHMJjZp5PK"
		);
	}
	static function TestDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"games",
			"dbusername"=>"games",
			"dbpassword"=>"2JVewgc7zEvvrJcHTYyVZnvHMJjZp5PK"
		);
	}
	static function ProdDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"games",
			"dbusername"=>"games",
			"dbpassword"=>"2JVewgc7zEvvrJcHTYyVZnvHMJjZp5PK"
		);
	}
}
?>