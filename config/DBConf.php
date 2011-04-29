<?php

namespace HappyPuppy;
class DBConf
{
	static function RootDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"",
			"dbusername"=>"root",
			"dbpassword"=>"netwitness"
		);
	}
	static function GamesDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"games",
			"dbusername"=>"games",
			"dbpassword"=>"2JVewgc7zEvvrJcHTYyVZnvHMJjZp5PK"
		);
	}
	static function ScratchDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"scratch",
			"dbusername"=>"scratch",
			"dbpassword"=>"0knHBKQ62Y4iS9xQKHPCw9z0rBg58bNMQOni0liP"
		);
	}
}
?>