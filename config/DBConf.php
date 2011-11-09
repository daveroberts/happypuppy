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
	static function LeagueDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"league",
			"dbusername"=>"league",
			"dbpassword"=>"9r9DlKkTSusE0qKJah7d0SUUVxrkz7CkrQOFHdY5"
		);
	}
	static function WikiDB(){
		return array(
			"hostname"	=>"localhost",
			"dbname"	=>"wiki",
			"dbusername"=>"wiki",
			"dbpassword"=>"J9Zungb3qVUh7zP5PN8WQCgatR9pBqgWJNwUG4qZKTkKnm3u"
		);
	}
}
?>